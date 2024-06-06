from flask import Flask, request, jsonify, render_template, redirect, url_for
import psycopg2
from psycopg2.extras import RealDictCursor

app = Flask(__name__)

# Dummy data storage
users = {}

# Database connection
def get_db_connection():
    conn = psycopg2.connect(
        host="localhost",
        database="tws",
        user="postgres",
        password="ardiansyah29"
    )
    return conn

# SQL queries
CREATE_USER_TABLE = """
CREATE TABLE IF NOT EXISTS users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);
"""

INSERT_USER_RETURN_ID = """
INSERT INTO users (username, password) 
VALUES (%s, %s) 
RETURNING id;
"""

SELECT_USER_BY_ID = """
SELECT id, username, password FROM users WHERE id = %s;
"""

@app.route('/')
def home():
    return render_template('login.html')

@app.route('/login', methods=['POST'])
def login():
    if request.method == 'POST':
        username = request.form['username']
        password = request.form['password']
        if username == 'mhs' and password == 'mhs123':
            return redirect(url_for('beranda'))
        else:
            return redirect(url_for('dosen'))

@app.route('/beranda')
def beranda():
    return render_template('beranda.html')

@app.route('/peminjaman')
def peminjaman():
    return render_template('input_peminjaman.html')

@app.route('/daftarruangan')
def daftar():
    php_url = 'http://localhost/daftar_ruangan.php'
    return redirect(php_url, code=307)

@app.route('/daftarpesan')
def pesan():
    php_url = 'http://localhost/daftar_pesan.php'
    return redirect(php_url, code=307)

@app.route('/dosen')
def dosen():
    php_url = 'http://localhost/beranda_dosen.php'
    return redirect(php_url, code=307)

@app.route('/api/users', methods=['POST'])
def create_user():
    if request.method == 'POST':
        username = request.form['username_form']
        password = request.form['password_form']
        
        connection = get_db_connection()
        with connection:
            with connection.cursor() as cursor:
                cursor.execute(CREATE_USER_TABLE)
                cursor.execute(INSERT_USER_RETURN_ID, (username, password))
                user_id = cursor.fetchone()[0]
        
        return {"id": user_id, "message": f"User {username} created."}, 200

    return jsonify({"error": "Invalid request"}), 400

@app.route('/api/users/<int:user_id>', methods=['GET'])
def get_user(user_id):
    connection = get_db_connection()
    with connection:
        with connection.cursor(cursor_factory=RealDictCursor) as cursor:
            cursor.execute(SELECT_USER_BY_ID, (user_id,))
            user = cursor.fetchone()
    
    if user:
        return jsonify(user), 200
    else:
        return jsonify({'error': 'User not found'}), 404

if __name__ == '__main__':
    app.run(debug=True)
