--
-- PostgreSQL database dump
--

-- Dumped from database version 15.0
-- Dumped by pg_dump version 15.0

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: dosen; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.dosen (
    id_dosen character varying(255) NOT NULL,
    nama_lengkap_dosen character varying(255),
    email_dosen character varying(255),
    nomer_telepon character varying(20),
    jabatan character varying(255),
    ruang_dosen character varying(50)
);


ALTER TABLE public.dosen OWNER TO postgres;

--
-- Name: ruang; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.ruang (
    id_ruang character varying(255) NOT NULL,
    nama_ruang character varying(255),
    kapasitas_ruang character varying(255),
    asal_gedung character varying(20),
    lantai_gedung character varying(20)
);


ALTER TABLE public.ruang OWNER TO postgres;

--
-- Name: user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."user" (
    id integer NOT NULL,
    akun character varying,
    password character varying
);


ALTER TABLE public."user" OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_id_seq OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.user_id_seq OWNED BY public."user".id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer NOT NULL,
    username character varying(50) NOT NULL,
    password character varying(50) NOT NULL
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: user id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: dosen; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.dosen (id_dosen, nama_lengkap_dosen, email_dosen, nomer_telepon, jabatan, ruang_dosen) FROM stdin;
DTIK_01	Prof M. Udin Harun Al Rasyid S.Kom, Ph.D	udin@els.dosen.id	080888881212	Kepala Departemen DTIK	PS 5.11
DTIK_02	Nur Rosyid Mubtadai S.Kom., M.T	rosyid@els.dosen.id	080011112222	Kepala Prodi D4 IT	PS 5.11
DTIK_03	Ahmad Syauqi Ahsan S.Kom., M.T	syauqi@els.dosen.id	080022112233	Kepala Prodi D3 IT	PS 5.11
DTIK_04	Isbat Uzzin Nadhori S.Kom., M.T	isbat@els.dosen.id	082232212234	Kepala Prodi D4 SDT	PS 5.11
MNJ_01	Dr Tri Budi Santoso ST, MT	tribudi@els.dosen.id	089786879897	Wakil Direktur Bidang 3	PS 2
MNJ_02	Hendrik Elvian Galuh Prasetya	henrik@els.dosen.id	08909078675645	Kepala Kemahasiswaan	PS 4
\.


--
-- Data for Name: ruang; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.ruang (id_ruang, nama_ruang, kapasitas_ruang, asal_gedung, lantai_gedung) FROM stdin;
A301	R. Kuliah Lt 3 D4 11	90	D4	3
A302	R. Kuliah Lt 3 D4 12	90	D4	3
A303	R. Kuliah Lt 3 D4 13	90	D4	3
A304	R. Kuliah Lt 3 D4 14	90	D4	3
B201	R. Kuliah Lt 2 D4	60	D4	2
B202	R. Kuliah Lt 2 D4 2	60	D4	2
B203	R. Kuliah Lt 2 D4 3	60	D4	2
B204	R. Kuliah Lt 2 D4 4	60	D4	2
B205	R. Kuliah Lt 2 D4 5	60	D4	2
B301	R. Kuliah Lt 3 D4 6	60	D4	3
B302	R. Kuliah Lt 3 D4 7	60	D4	3
B303	R. Kuliah Lt 3 D4 8	60	D4	3
B304	R. Kuliah Lt 3 D4 9	60	D4	3
B305	R. Kuliah Lt 3 D4 10	60	D4	3
HH-103	R. Kuliah D3 Lt 1	30	D3	1
HH-104	R. Kuliah D3 Lt 1	30	D3	1
HH-105	R. Kuliah D3 Lt 1	30	D3	1
HH-106B	R. Kuliah D3 Lt 1	30	D3	1
HH-106T	R. Kuliah D3 Lt 1	30	D3	1
HH-201	R. Kuliah D3 Lt 2	30	D3	2
HH-203	R. Kuliah D3 Lt 2	30	D3	2
HH-204B	R. Kuliah D3 Lt 2	30	D3	2
HH-204T	R. Kuliah D3 Lt 2	30	D3	2
PS-03.04	R. Kuliah Lt 3 S2	30	S2	3
PS-03.13	R. Kuliah Lt 3 S2	30	S2	3
PS-03.15	R. Kuliah Lt 3 S2	30	S2	3
PS-04.08	R. Kuliah Lt 4 S2	30	S2	4
PS-04.11	R. Kuliah Lt 4 S2	30	S2	4
PS-04.19	R. Kuliah Lt 4 S2	30	S2	4
PS-05.08	R. Kuliah Lt 5 S2	30	S2	5
PS-05.10	R. Kuliah Lt 5 S2	30	S2	5
PS-05.12	R. Kuliah Lt 5 S2	30	S2	5
PS-07.03	R. Kuliah Lt 7 S2	30	S2	7
PS-07.04	R. Kuliah Lt 7 S2	30	S2	7
PS-07.05	R. Kuliah Lt 7 S2	30	S2	7
PS-07.07	R. Kuliah Lt 7 S2	30	S2	7
SAW-06.10	R. Kuliah Gedung SAW Lt 6	120	SAW	6
SAW-11.08	R. Kuliah Gedung SAW Lt 11	120	SAW	11
Audit	Auditorium Lt 6 PS	480	PS	6
HD4	Hall Gedung D4	200	D4	1
HD3	Hall Gedung D3	100	D3	1
Kantin	Kantin	100	D3	1
LB	Lapangan Basket	500	D4	1
LF	Lapangan Futsal	350	D4	1
LM	Lapangan Merah	350	D3	1
MT	Mini Teater Lt 6 PS	144	PS	6
IS	Inovation Startup Lt 5 PS	80	PS	5
APPS	Area Parkiran PS	170	S2	1
AKPS2	Area Koridor Lt 2 PS	30	S2	2
AKPS5	Area Koridor Lt 5 PS	10	S2	5
AKPS8	Area Koridor Lt 8 PS	50	S2	8
TDN	Area Tandon D4	50	D4	1
BMPS	Basement PS	50	S2	G
SLSPS6	Selasar Lt 6 PS	100	S2	6
SLSPS7	Selasar Lt 7 PS	50	S2	7
TMNMS	Taman Depan Mushollah	25	Mushollah	1
AMPT	Taman Keong/Ampiteater	150	D3	1
TMNSPE	Taman SPE	100	D3	1
HH-101	Teater D3	150	D3	1
APD3	Area Parkir D3	100	D3	1
APPUT	Area Parkir Depan & Samping PUT	100	PUT	1
\.


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."user" (id, akun, password) FROM stdin;
1	Ardiansyah@sdt.pens.ac.id	ardi2924
2	Ardiansyah@sdt.pens.ac.id	ardi2924
3	bagas@sdt.pens.ac.id	bagasgaming
4	bagas@sdt.pens.ac.id	bagasgaming
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, username, password) FROM stdin;
1	renaldi@sdt.pens.ac.id	popopopo
2	Ardiansyah@sdt.pens.ac.id	aredafaefea
\.


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.user_id_seq', 4, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 2, true);


--
-- Name: dosen dosen_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.dosen
    ADD CONSTRAINT dosen_pkey PRIMARY KEY (id_dosen);


--
-- Name: ruang ruang_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.ruang
    ADD CONSTRAINT ruang_pkey PRIMARY KEY (id_ruang);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

