--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.24
-- Dumped by pg_dump version 9.6.24

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

--
-- Name: sika; Type: SCHEMA; Schema: -; Owner: inalum
--

CREATE SCHEMA sika;


ALTER SCHEMA sika OWNER TO inalum;

--
-- Name: jenis_seksi; Type: TYPE; Schema: sika; Owner: inalum
--

CREATE TYPE sika.jenis_seksi AS ENUM (
    'DEFAULT',
    'SEKSI',
    'PERUSAHAAN'
);


ALTER TYPE sika.jenis_seksi OWNER TO inalum;

--
-- Name: status; Type: TYPE; Schema: sika; Owner: inalum
--

CREATE TYPE sika.status AS ENUM (
    'A',
    'N'
);


ALTER TYPE sika.status OWNER TO inalum;

--
-- Name: status_bool; Type: TYPE; Schema: sika; Owner: inalum
--

CREATE TYPE sika.status_bool AS ENUM (
    '0',
    '1'
);


ALTER TYPE sika.status_bool OWNER TO inalum;

--
-- Name: status_izin_kerja; Type: TYPE; Schema: sika; Owner: inalum
--

CREATE TYPE sika.status_izin_kerja AS ENUM (
    'REQUESTED',
    'ACCEPTED',
    'DONE',
    'REJECTED',
    'DONE2',
    'REJECTED2',
    'REJECTED3'
);


ALTER TYPE sika.status_izin_kerja OWNER TO inalum;

--
-- Name: tipe_form_body; Type: TYPE; Schema: sika; Owner: inalum
--

CREATE TYPE sika.tipe_form_body AS ENUM (
    'INPUT',
    'CHECKBOX',
    'CHECKINPUT',
    'RADIO',
    'DATE',
    'TIME',
    'HEADER',
    'TABLE',
    'FOOTNOTE',
    'NUMBER'
);


ALTER TYPE sika.tipe_form_body OWNER TO inalum;

--
-- Name: f_check_nomor_izin_sika(character varying, numeric, date, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.f_check_nomor_izin_sika(kode1 character varying, count1 numeric, year1 date, maxzero character varying, idjenis1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    ADA NUMERIC;
	COUNTX NUMERIC;
    NOMOR_IZINX VARCHAR;
BEGIN
    NOMOR_IZINX := ('%'||SIKA.F_GIMME_ZERO(COUNT1::VARCHAR, MAXZERO)||'-'||TO_CHAR(YEAR1::DATE, 'yyyy'))::TEXT;
    SELECT COUNT(*) INTO ADA FROM SIKA.V_IZIN_KERJA WHERE ID_JENIS = IDJENIS1 AND NOMOR_IZIN LIKE NOMOR_IZINX;
    IF ADA > 0 THEN
		RETURN SIKA.F_CHECK_NOMOR_IZIN_SIKA(KODE1, COUNT1 + 1, YEAR1, MAXZERO, IDJENIS1);
    ELSE
        NOMOR_IZINX := (KODE1||SIKA.F_GIMME_ZERO(COUNT1::VARCHAR, MAXZERO)||'-'||TO_CHAR(YEAR1::DATE, 'yyyy'))::TEXT;
        RETURN NOMOR_IZINX;
    END IF;
END;
$$;


ALTER FUNCTION sika.f_check_nomor_izin_sika(kode1 character varying, count1 numeric, year1 date, maxzero character varying, idjenis1 character varying) OWNER TO postgres;

--
-- Name: f_create_id_form_body(); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.f_create_id_form_body() RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    ID_FORM_BODYX VARCHAR;
    ID_FORM_BODY_FINAL1 VARCHAR;
    KODE VARCHAR;
    MAXZERO VARCHAR;
    CACAH NUMERIC;

BEGIN
    -- FB000001
    KODE := 'FB';
    MAXZERO := '000000'; 
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_FORM_BODY;
    IF CACAH = 0 THEN
        RETURN 'FB000001';
    ELSE
        SELECT MAX(ID_FORM_BODY) INTO ID_FORM_BODYX FROM SIKA.MD_FORM_BODY GROUP BY ID_FORM_BODY ORDER BY NULLIF(regexp_replace(ID_FORM_BODY, '\D', '', 'g'), '')::int DESC LIMIT 1;
        ID_FORM_BODY_FINAL1 := CONCAT(KODE||SIKA.F_GIMME_ZERO(SUBSTRING(ID_FORM_BODYX, 3, 6), MAXZERO)::VARCHAR);
        RETURN ID_FORM_BODY_FINAL1; 
    END IF;
END;
$$;


ALTER FUNCTION sika.f_create_id_form_body() OWNER TO postgres;

--
-- Name: f_create_id_form_header(); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.f_create_id_form_header() RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    ID_FORM_HEADER1 VARCHAR;
    ID_FORM_HEADER_AKHIR VARCHAR;
    KODE VARCHAR;
    MAXZERO VARCHAR;
    CACAH NUMERIC;

BEGIN
    KODE := 'FH';
    MAXZERO := '000'; 
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_FORM_HEADER;
    IF CACAH = 0 THEN
        RETURN 'FH001';
    ELSE
        SELECT MAX(ID_FORM_HEADER) INTO ID_FORM_HEADER_AKHIR FROM SIKA.MD_FORM_HEADER GROUP BY ID_FORM_HEADER ORDER BY NULLIF(regexp_replace(ID_FORM_HEADER, '\D', '', 'g'), '')::int DESC LIMIT 1;
        ID_FORM_HEADER1 := CONCAT(KODE||SIKA.F_GIMME_ZERO(SUBSTRING(ID_FORM_HEADER_AKHIR, 3, 3), MAXZERO)::VARCHAR);
        RETURN ID_FORM_HEADER1; 
    END IF;
END;
$$;


ALTER FUNCTION sika.f_create_id_form_header() OWNER TO inalum;

--
-- Name: f_create_id_menu(); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.f_create_id_menu() RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    ID_MENUX VARCHAR;
    ID_MENU_FINAL1 VARCHAR;
    KODE VARCHAR;
    MAXZERO VARCHAR;
    CACAH NUMERIC;

BEGIN
    -- MN000001
    KODE := 'MN';
    MAXZERO := '000000'; 
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_ROLE;
    IF CACAH = 0 THEN
        RETURN 'MN000001';
    ELSE
        SELECT MAX(ID_MENU) INTO ID_MENUX FROM SIKA.MD_MENU GROUP BY ID_MENU ORDER BY NULLIF(regexp_replace(ID_MENU, '\D', '', 'g'), '')::int DESC LIMIT 1;
        ID_MENU_FINAL1 := CONCAT(KODE||SIKA.F_GIMME_ZERO(SUBSTRING(ID_MENUX, 3, 6), MAXZERO)::VARCHAR);
        RETURN ID_MENU_FINAL1; 
    END IF;
END;
$$;


ALTER FUNCTION sika.f_create_id_menu() OWNER TO postgres;

--
-- Name: f_create_id_role(); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.f_create_id_role() RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    ID_ROLE1 VARCHAR;
    ID_ROLE_AKHIR VARCHAR;
    KODE VARCHAR;
    MAXZERO VARCHAR;
    CACAH NUMERIC;

BEGIN
    KODE := 'RS';
    MAXZERO := '000'; 
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_ROLE;
    IF CACAH = 0 THEN
        RETURN 'RS001';
    ELSE
        SELECT MAX(ID_ROLE) INTO ID_ROLE_AKHIR FROM SIKA.MD_ROLE GROUP BY ID_ROLE ORDER BY NULLIF(regexp_replace(ID_ROLE, '\D', '', 'g'), '')::int DESC LIMIT 1;
        ID_ROLE1 := CONCAT(KODE||SIKA.F_GIMME_ZERO(SUBSTRING(ID_ROLE_AKHIR, 3, 3), MAXZERO)::VARCHAR);
        RETURN ID_ROLE1; 
    END IF;
END;
$$;


ALTER FUNCTION sika.f_create_id_role() OWNER TO inalum;

--
-- Name: f_create_id_seksi(); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.f_create_id_seksi() RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    ID_SEKSI1 VARCHAR;
    ID_SEKSI_AKHIR VARCHAR;
    KODE VARCHAR;
    MAXZERO VARCHAR;
    CACAH NUMERIC;

BEGIN
    KODE := 'S';
    MAXZERO := '0000'; 
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_SEKSI;
    IF CACAH = 0 THEN
        RETURN 'S0001';
    ELSE
        SELECT MAX(ID_SEKSI) INTO ID_SEKSI_AKHIR FROM SIKA.MD_SEKSI GROUP BY ID_SEKSI ORDER BY NULLIF(regexp_replace(ID_SEKSI, '\D', '', 'g'), '')::int DESC LIMIT 1;
        ID_SEKSI1 := CONCAT(KODE||SIKA.F_GIMME_ZERO(SUBSTRING(ID_SEKSI_AKHIR, 2, 4), MAXZERO)::VARCHAR);
        RETURN ID_SEKSI1; 
    END IF;
END;
$$;


ALTER FUNCTION sika.f_create_id_seksi() OWNER TO inalum;

--
-- Name: f_gimme_zero(character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.f_gimme_zero(thevalue character varying, maxzero character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    NILAI NUMERIC;
    PARSING VARCHAR;
    PANJANG VARCHAR;
BEGIN
    NILAI := (THEVALUE::INT) + 1;
    PANJANG := LENGTH(NILAI::VARCHAR);
    PARSING := SUBSTRING(MAXZERO::VARCHAR FROM 1 FOR (LENGTH(MAXZERO::VARCHAR) - PANJANG::INT));
    RETURN CONCAT(PARSING||NILAI);
END;
$$;


ALTER FUNCTION sika.f_gimme_zero(thevalue character varying, maxzero character varying) OWNER TO inalum;

--
-- Name: p_delete_action(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_delete_action(id1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_ACTION WHERE ID_ACTION = ID1;
    IF CACAH > 0 THEN
        DELETE FROM SIKA.MD_ACTION WHERE ID_ACTION = ID1;
        -- UPDATE SIKA.MD_ACTION SET IS_DELETED = TRUE WHERE ID_ACTION = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_action(id1 character varying) OWNER TO inalum;

--
-- Name: p_delete_form_body(character varying); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.p_delete_form_body(id_form_body1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_FORM_BODY WHERE ID_FORM_BODY = ID_FORM_BODY1;
    IF CACAH > 0 THEN
        -- UPDATE SIKA.MD_FORM_BODY SET IS_DELETED = TRUE WHERE ID_FORM_BODY = ID_FORM_BODY1;
        DELETE FROM SIKA.D_FORM_RELATION WHERE ID_FORM_BODY = ID_FORM_BODY1;
        DELETE FROM SIKA.D_FORM_RELATION WHERE ID_FORM_BODY IN (SELECT ID_FORM_BODY FROM SIKA.MD_FORM_BODY WHERE PARENT = ID_FORM_BODY1);
        DELETE FROM SIKA.MD_FORM_BODY WHERE PARENT = ID_FORM_BODY1;
        DELETE FROM SIKA.MD_FORM_BODY WHERE ID_FORM_BODY = ID_FORM_BODY1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_form_body(id_form_body1 character varying) OWNER TO postgres;

--
-- Name: p_delete_form_header(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_delete_form_header(id_form_header1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_FORM_HEADER WHERE ID_FORM_HEADER = ID_FORM_HEADER1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_FORM_HEADER SET IS_DELETED = TRUE WHERE ID_FORM_HEADER = ID_FORM_HEADER1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_form_header(id_form_header1 character varying) OWNER TO inalum;

--
-- Name: p_delete_form_relation(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_delete_form_relation(id1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.D_FORM_RELATION WHERE ID_FORM_HEADER = ID1;
    IF CACAH > 0 THEN
        DELETE FROM SIKA.D_FORM_RELATION WHERE ID_FORM_HEADER = ID1;
        -- UPDATE SIKA.MD_ACTION SET IS_DELETED = TRUE WHERE ID_JENIS = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_form_relation(id1 character varying) OWNER TO inalum;

--
-- Name: p_delete_izin_kerja(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_delete_izin_kerja(id1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.TR_IZIN_KERJA WHERE ID_IZIN_KERJA = ID1;
    IF CACAH > 0 THEN
        -- DELETE FROM SIKA.TR_IZIN_KERJA WHERE ID_IZIN_KERJA = ID1;
        UPDATE SIKA.TR_IZIN_KERJA SET IS_DELETED = TRUE WHERE ID_IZIN_KERJA = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_izin_kerja(id1 character varying) OWNER TO inalum;

--
-- Name: p_delete_jenis(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_delete_jenis(id1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_JENIS_SIKA WHERE ID_JENIS = ID1;
    IF CACAH > 0 THEN
        DELETE FROM SIKA.MD_JENIS_SIKA WHERE ID_JENIS = ID1;
        -- UPDATE SIKA.MD_JENIS_SIKA SET IS_DELETED = TRUE WHERE ID_JENIS = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_jenis(id1 character varying) OWNER TO inalum;

--
-- Name: p_delete_menu(character varying); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.p_delete_menu(id_menu1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_MENU WHERE ID_MENU = ID_MENU1;
    IF CACAH > 0 THEN
        -- UPDATE SIKA.MD_MENU SET IS_DELETED = TRUE WHERE ID_MENU = ID_MENU1;
        DELETE FROM SIKA.D_PERMISSIONS WHERE ID_MENU = ID_MENU1;
        DELETE FROM SIKA.D_PERMISSIONS WHERE ID_MENU IN (SELECT ID_MENU FROM SIKA.MD_MENU WHERE ID_PARENT = ID_MENU1);
        DELETE FROM SIKA.MD_MENU WHERE ID_PARENT = ID_MENU1;
        DELETE FROM SIKA.MD_MENU WHERE ID_MENU = ID_MENU1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_menu(id_menu1 character varying) OWNER TO postgres;

--
-- Name: p_delete_permission(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_delete_permission(id1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.D_PERMISSIONS WHERE ID_ROLE = ID1;
    IF CACAH > 0 THEN
        DELETE FROM SIKA.D_PERMISSIONS WHERE ID_ROLE = ID1;
        -- UPDATE SIKA.MD_ACTION SET IS_DELETED = TRUE WHERE ID_ACTION = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_permission(id1 character varying) OWNER TO inalum;

--
-- Name: p_delete_permission_private(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_delete_permission_private(id1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.D_PERMISSIONS_PRIVATE WHERE UID_USER_SYSTEM = ID1;
    IF CACAH > 0 THEN
        DELETE FROM SIKA.D_PERMISSIONS_PRIVATE WHERE UID_USER_SYSTEM = ID1;
        -- UPDATE SIKA.MD_ACTION SET IS_DELETED = TRUE WHERE ID_ACTION = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_permission_private(id1 character varying) OWNER TO inalum;

--
-- Name: p_delete_relasi_izin_kerja(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_delete_relasi_izin_kerja(id1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.D_RELASI_IZIN_KERJA WHERE ID_IZIN_KERJA = ID1;
    IF CACAH > 0 THEN
        DELETE FROM SIKA.D_RELASI_IZIN_KERJA WHERE ID_IZIN_KERJA = ID1;
        -- UPDATE SIKA.MD_ACTION SET IS_DELETED = TRUE WHERE ISIAN = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_relasi_izin_kerja(id1 character varying) OWNER TO inalum;

--
-- Name: p_delete_role(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_delete_role(id_role1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_ROLE WHERE ID_ROLE = ID_ROLE1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_ROLE SET IS_DELETED = TRUE WHERE ID_ROLE = ID_ROLE1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_role(id_role1 character varying) OWNER TO inalum;

--
-- Name: p_delete_seksi(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_delete_seksi(id_seksi1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_SEKSI WHERE ID_SEKSI = ID_SEKSI1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_SEKSI SET IS_DELETED = TRUE WHERE ID_SEKSI = ID_SEKSI1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_seksi(id_seksi1 character varying) OWNER TO inalum;

--
-- Name: p_delete_user(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_delete_user(id_user1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_USER WHERE ID_USER = ID_USER1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_USER SET IS_DELETED = TRUE WHERE ID_USER = ID_USER1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_delete_user(id_user1 character varying) OWNER TO inalum;

--
-- Name: p_insert_action(character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_insert_action(id1 character varying, code1 character varying, name1 character varying, deskripsi1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_ACTIONX VARCHAR (10);

BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_ACTION WHERE ID_ACTION = ID1;
    IF CACAH > 0 THEN
        ID_ACTIONX := SYSTEM.RANDOM_STRING(10);
    ELSE 
        ID_ACTIONX := ID1;
    END IF;

    INSERT INTO SIKA.MD_ACTION(ID_ACTION, KODE, NM_ACTION, DESKRIPSI, TGL_INSERT) VALUES(ID_ACTIONX, CODE1, NAME1, DESKRIPSI1, NOW());

    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_action(id1 character varying, code1 character varying, name1 character varying, deskripsi1 character varying) OWNER TO inalum;

--
-- Name: p_insert_form_body(character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.p_insert_form_body(nm_form_body1 character varying, tipe_form_body1 character varying, parent1 character varying, is_required1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_FORM_BODYX VARCHAR;
    URUTX NUMERIC;
    URUT_GLOBALX NUMERIC;
    IS_REQUIREDX BOOLEAN;

BEGIN
    IF IS_REQUIRED1 = 't' THEN
        IS_REQUIREDX := TRUE;
    ELSE
        IS_REQUIREDX := FALSE;
    END IF;

    SELECT SIKA.F_CREATE_ID_FORM_BODY() INTO ID_FORM_BODYX;
    SELECT COUNT(ID_FORM_BODY) FROM SIKA.MD_FORM_BODY INTO URUT_GLOBALX;
    SELECT COUNT(ID_FORM_BODY) FROM SIKA.MD_FORM_BODY WHERE PARENT = PARENT1 INTO URUTX;
    INSERT INTO SIKA.MD_FORM_BODY(ID_FORM_BODY, NM_FORM_BODY, TIPE_FORM_BODY, IS_REQUIRED, PARENT, LEVEL, URUT, URUT_GLOBAL, TGL_INSERT) VALUES(ID_FORM_BODYX, NM_FORM_BODY1, TIPE_FORM_BODY1::SIKA.TIPE_FORM_BODY, IS_REQUIREDX, PARENT1, '1', (URUTX + 1), (URUT_GLOBALX + 1), NOW());
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_form_body(nm_form_body1 character varying, tipe_form_body1 character varying, parent1 character varying, is_required1 character varying) OWNER TO postgres;

--
-- Name: p_insert_form_header(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_insert_form_header(nm_form_header1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_FORM_HEADERX VARCHAR;

BEGIN
    SELECT SIKA.F_CREATE_ID_FORM_HEADER() INTO ID_FORM_HEADERX;
    INSERT INTO SIKA.MD_FORM_HEADER(ID_FORM_HEADER, NM_FORM_HEADER, TGL_INSERT) VALUES(ID_FORM_HEADERX, NM_FORM_HEADER1, NOW());
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_form_header(nm_form_header1 character varying) OWNER TO inalum;

--
-- Name: p_insert_form_relation(character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_insert_form_relation(id1 character varying, form_header1 character varying, form_body1 character varying, jenis_sika1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_FORM_RELATIONX VARCHAR (15);

BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.D_FORM_RELATION WHERE ID_FORM_RELATION = ID1;
    IF CACAH > 0 THEN
        ID_FORM_RELATIONX := SYSTEM.RANDOM_STRING(15);
    ELSE 
        ID_FORM_RELATIONX := ID1;
    END IF;

    INSERT INTO SIKA.D_FORM_RELATION(ID_FORM_RELATION, ID_FORM_HEADER, ID_FORM_BODY, ID_JENIS) VALUES(ID_FORM_RELATIONX, FORM_HEADER1, FORM_BODY1, JENIS_SIKA1);

    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_form_relation(id1 character varying, form_header1 character varying, form_body1 character varying, jenis_sika1 character varying) OWNER TO inalum;

--
-- Name: p_insert_izin_kerja(character varying, text, character varying, date, time without time zone, time without time zone, text, character varying, date, character varying, character varying, character varying, character varying, character varying, sika.status_izin_kerja); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.p_insert_izin_kerja(id1 character varying, nomor_izin1 text, id_jenis1 character varying, tgl_berlaku1 date, jam_berlaku_mulai1 time without time zone, jam_berlaku_akhir1 time without time zone, catatan1 text, requester1 character varying, tgl_requester1 date, seksi_pj_kerja1 character varying, pj_kerja1 character varying, tgl_pj_kerja1 character varying, pj_lokasi1 character varying, tgl_pj_lokasi1 character varying, status1 sika.status_izin_kerja) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_IZIN_KERJAX VARCHAR (15);
    TGL_PJ_KERJAX DATE;
    PJ_LOKASIX VARCHAR (30);
    TGL_PJ_LOKASIX DATE;
    KODE NUMERIC;
    MAXZERO VARCHAR;
    NOMOR_IZINX TEXT;

BEGIN
    MAXZERO := '0000'; 
    SELECT COUNT(*) INTO KODE FROM SIKA.V_IZIN_KERJA WHERE TO_CHAR(TGL_BERLAKU, 'yyyy') = TO_CHAR(TGL_BERLAKU1::DATE, 'yyyy') AND ID_JENIS = ID_JENIS1::VARCHAR;
    IF KODE = 0 THEN
        NOMOR_IZINX := NOMOR_IZIN1||'0001-'||TO_CHAR(TGL_BERLAKU1, 'yyyy');
    ELSE
        NOMOR_IZINX := SIKA.F_CHECK_NOMOR_IZIN_SIKA(NOMOR_IZIN1, 0, TGL_BERLAKU1, MAXZERO, ID_JENIS1);
    END IF;

    SELECT COUNT(*) INTO CACAH FROM SIKA.TR_IZIN_KERJA WHERE ID_IZIN_KERJA = ID1;
    IF CACAH > 0 THEN
        ID_IZIN_KERJAX := SYSTEM.RANDOM_STRING(15);
    ELSE 
        ID_IZIN_KERJAX := ID1;
    END IF;
    IF TGL_PJ_KERJA1 = '' THEN
        TGL_PJ_KERJAX := NULL;
    ELSE
        TGL_PJ_KERJAX := TGL_PJ_KERJA1::DATE;
    END IF;
    IF PJ_LOKASI1 = '' THEN
        PJ_LOKASIX := NULL;
    ELSE
        PJ_LOKASIX := PJ_LOKASI1;
    END IF;
    IF TGL_PJ_LOKASI1 = '' THEN
        TGL_PJ_LOKASIX := NULL;
    ELSE
        TGL_PJ_LOKASIX := TGL_PJ_LOKASI1::DATE;
    END IF;

    INSERT INTO SIKA.TR_IZIN_KERJA(ID_IZIN_KERJA, NOMOR_IZIN, ID_JENIS, TGL_BERLAKU, JAM_BERLAKU_MULAI, JAM_BERLAKU_AKHIR, CATATAN, REQUESTER, TGL_REQUESTER, PJ_KERJA, TGL_PJ_KERJA, PJ_LOKASI, TGL_PJ_LOKASI, STATUS, TGL_INSERT) VALUES(ID_IZIN_KERJAX, NOMOR_IZINX, ID_JENIS1, TGL_BERLAKU1, JAM_BERLAKU_MULAI1, JAM_BERLAKU_AKHIR1, CATATAN1, REQUESTER1, TGL_REQUESTER1, PJ_KERJA1, TGL_PJ_KERJAX, PJ_LOKASIX, TGL_PJ_LOKASIX, STATUS1, NOW());

    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_izin_kerja(id1 character varying, nomor_izin1 text, id_jenis1 character varying, tgl_berlaku1 date, jam_berlaku_mulai1 time without time zone, jam_berlaku_akhir1 time without time zone, catatan1 text, requester1 character varying, tgl_requester1 date, seksi_pj_kerja1 character varying, pj_kerja1 character varying, tgl_pj_kerja1 character varying, pj_lokasi1 character varying, tgl_pj_lokasi1 character varying, status1 sika.status_izin_kerja) OWNER TO postgres;

--
-- Name: p_insert_jenis(character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_insert_jenis(id1 character varying, no_dokumen1 character varying, nm_jenis1 character varying, judul1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_JENISX VARCHAR (10);

BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_JENIS_SIKA WHERE ID_JENIS = ID1;
    IF CACAH > 0 THEN
        ID_JENISX := SYSTEM.RANDOM_STRING(10);
    ELSE 
        ID_JENISX := ID1;
    END IF;

    INSERT INTO SIKA.MD_JENIS_SIKA(ID_JENIS, NO_DOKUMEN, NM_JENIS, JUDUL, TGL_INSERT) VALUES(ID_JENISX, NO_DOKUMEN1, NM_JENIS1, JUDUL1, NOW());

    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_jenis(id1 character varying, no_dokumen1 character varying, nm_jenis1 character varying, judul1 character varying) OWNER TO inalum;

--
-- Name: p_insert_menu(character varying, character varying, character varying, sika.status); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.p_insert_menu(nm_menu1 character varying, link_menu1 character varying, icon_menu1 character varying, status1 sika.status) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_MENUX VARCHAR;
    URUTX NUMERIC;
    URUT_GLOBALX NUMERIC;

BEGIN
    SELECT SIKA.F_CREATE_ID_MENU() INTO ID_MENUX;
    SELECT COUNT(ID_MENU) FROM SIKA.MD_MENU INTO URUT_GLOBALX;
    SELECT COUNT(ID_MENU) FROM SIKA.MD_MENU WHERE ID_PARENT = 'MN000001' INTO URUTX;
    INSERT INTO SIKA.MD_MENU(ID_MENU, NM_MENU, LINK_MENU, ICON_MENU, STATUS, ID_PARENT, LEVEL, URUT, URUT_GLOBAL, TGL_INSERT) VALUES(ID_MENUX, NM_MENU1, LINK_MENU1, ICON_MENU1, STATUS1, 'MN000001', '1', (URUTX + 1), (URUT_GLOBALX + 1), NOW());
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_menu(nm_menu1 character varying, link_menu1 character varying, icon_menu1 character varying, status1 sika.status) OWNER TO postgres;

--
-- Name: p_insert_permission(character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_insert_permission(id1 character varying, role1 character varying, menu1 character varying, akses1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_PERMISSIONX VARCHAR (15);

BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.D_PERMISSIONS WHERE ID_PERMISSION = ID1;
    IF CACAH > 0 THEN
        ID_PERMISSIONX := SYSTEM.RANDOM_STRING(15);
    ELSE 
        ID_PERMISSIONX := ID1;
    END IF;

    INSERT INTO SIKA.D_PERMISSIONS(ID_PERMISSION, ID_ROLE, ID_MENU, ID_ACTION) VALUES(ID_PERMISSIONX, ROLE1, MENU1, AKSES1);

    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_permission(id1 character varying, role1 character varying, menu1 character varying, akses1 character varying) OWNER TO inalum;

--
-- Name: p_insert_permission_private(character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_insert_permission_private(id1 character varying, user1 character varying, menu1 character varying, akses1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_PERMISSION_PRIVATEX VARCHAR (15);

BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.D_PERMISSIONS_PRIVATE WHERE ID_PERMISSION_PRIVATE = ID1;
    IF CACAH > 0 THEN
        ID_PERMISSION_PRIVATEX := SYSTEM.RANDOM_STRING(15);
    ELSE 
        ID_PERMISSION_PRIVATEX := ID1;
    END IF;

    INSERT INTO SIKA.D_PERMISSIONS_PRIVATE(ID_PERMISSION_PRIVATE, UID_USER_SYSTEM, ID_MENU, ID_ACTION) VALUES(ID_PERMISSION_PRIVATEX, USER1, MENU1, AKSES1);

    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_permission_private(id1 character varying, user1 character varying, menu1 character varying, akses1 character varying) OWNER TO inalum;

--
-- Name: p_insert_perusahaan(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_insert_perusahaan(nm_seksi1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_SEKSIX VARCHAR;

BEGIN
    SELECT SIKA.F_CREATE_ID_SEKSI() INTO ID_SEKSIX;
    INSERT INTO SIKA.MD_SEKSI(ID_SEKSI, NM_SEKSI, ALIAS_SEKSI, JENIS, TGL_INSERT) VALUES(ID_SEKSIX, NM_SEKSI1, NM_SEKSI1, 'PERUSAHAAN', NOW());
    RETURN ID_SEKSIX;
END;
$$;


ALTER FUNCTION sika.p_insert_perusahaan(nm_seksi1 character varying) OWNER TO inalum;

--
-- Name: p_insert_relasi_izin_kerja(character varying, character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_insert_relasi_izin_kerja(id1 character varying, izin_kerja1 character varying, form_body1 character varying, isian1 character varying, other1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_RELASI_IZIN_KERJAX VARCHAR (60);

BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.D_RELASI_IZIN_KERJA WHERE ID_RELASI_IZIN_KERJA = ID1;
    IF CACAH > 0 THEN
        ID_RELASI_IZIN_KERJAX := SYSTEM.RANDOM_STRING(60);
    ELSE 
        ID_RELASI_IZIN_KERJAX := ID1;
    END IF;

    INSERT INTO SIKA.D_RELASI_IZIN_KERJA(ID_RELASI_IZIN_KERJA, ID_IZIN_KERJA, ID_FORM_BODY, ISIAN, OTHER) VALUES(ID_RELASI_IZIN_KERJAX, IZIN_KERJA1, FORM_BODY1, ISIAN1, OTHER1);

    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_relasi_izin_kerja(id1 character varying, izin_kerja1 character varying, form_body1 character varying, isian1 character varying, other1 character varying) OWNER TO inalum;

--
-- Name: p_insert_role(character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_insert_role(nm_role1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_ROLEX VARCHAR;

BEGIN
    SELECT SIKA.F_CREATE_ID_ROLE() INTO ID_ROLEX;
    INSERT INTO SIKA.MD_ROLE(ID_ROLE, NM_ROLE, TGL_INSERT) VALUES(ID_ROLEX, NM_ROLE1, NOW());
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_role(nm_role1 character varying) OWNER TO inalum;

--
-- Name: p_insert_seksi(character varying, character varying, sika.jenis_seksi); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_insert_seksi(nm_seksi1 character varying, alias_seksi1 character varying, jenis1 sika.jenis_seksi) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_SEKSIX VARCHAR;

BEGIN
    SELECT SIKA.F_CREATE_ID_SEKSI() INTO ID_SEKSIX;
    INSERT INTO SIKA.MD_SEKSI(ID_SEKSI, NM_SEKSI, ALIAS_SEKSI, JENIS, TGL_INSERT) VALUES(ID_SEKSIX, NM_SEKSI1, ALIAS_SEKSI1, JENIS1, NOW());
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_seksi(nm_seksi1 character varying, alias_seksi1 character varying, jenis1 sika.jenis_seksi) OWNER TO inalum;

--
-- Name: p_insert_user(character varying, character varying, character varying, character varying, character varying, character varying, character varying, character varying, sika.status_bool); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_insert_user(id_user1 character varying, nama1 character varying, id_seksi1 character varying, username1 character varying, email1 character varying, password1 character varying, id_role1 character varying, nm_perusahaan1 character varying, status1 sika.status_bool) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_SEKSIX VARCHAR;

BEGIN
    IF ID_SEKSI1='lainnya' THEN 
        SELECT SIKA.P_INSERT_PERUSAHAAN(NM_PERUSAHAAN1) INTO ID_SEKSIX;
        ELSE
        ID_SEKSIX=ID_SEKSI1;
    END IF;
    INSERT INTO SIKA.MD_USER(ID_USER, NAMA, ID_SEKSI, USERNAME, EMAIL, PASSWORD, ID_ROLE, STATUS, TGL_INSERT) VALUES(ID_USER1, NAMA1, ID_SEKSIX, USERNAME1, EMAIL1, PASSWORD1, ID_ROLE1, STATUS1, NOW());
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_insert_user(id_user1 character varying, nama1 character varying, id_seksi1 character varying, username1 character varying, email1 character varying, password1 character varying, id_role1 character varying, nm_perusahaan1 character varying, status1 sika.status_bool) OWNER TO inalum;

--
-- Name: p_update_action(character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_update_action(id1 character varying, code1 character varying, name1 character varying, deskripsi1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_ACTION WHERE ID_ACTION = ID1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_ACTION 
        SET 
        KODE = CODE1, 
        NM_ACTION = NAME1, 
        DESKRIPSI = DESKRIPSI1 
        WHERE ID_ACTION = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_action(id1 character varying, code1 character varying, name1 character varying, deskripsi1 character varying) OWNER TO inalum;

--
-- Name: p_update_form_body(character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.p_update_form_body(id_form_body1 character varying, nm_form_body1 character varying, tipe_form_body1 character varying, is_required1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    IS_REQUIREDX BOOLEAN;

BEGIN
    IF IS_REQUIRED1 = 't' THEN
        IS_REQUIREDX := TRUE;
    ELSE
        IS_REQUIREDX := FALSE;
    END IF;

    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_FORM_BODY WHERE ID_FORM_BODY = ID_FORM_BODY1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_FORM_BODY SET 
            NM_FORM_BODY = NM_FORM_BODY1, 
            TIPE_FORM_BODY = TIPE_FORM_BODY1::SIKA.TIPE_FORM_BODY, 
            IS_REQUIRED = IS_REQUIREDX
        WHERE ID_FORM_BODY = ID_FORM_BODY1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_form_body(id_form_body1 character varying, nm_form_body1 character varying, tipe_form_body1 character varying, is_required1 character varying) OWNER TO postgres;

--
-- Name: p_update_form_body_all(character varying, character varying, character varying, character varying, character varying, integer, integer, integer); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.p_update_form_body_all(id_form_body1 character varying, nm_form_body1 character varying, tipe_form_body1 character varying, is_required1 character varying, parent1 character varying, level1 integer, urut1 integer, urut_global1 integer) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    IS_REQUIREDX BOOLEAN;

BEGIN
    IF IS_REQUIRED1 = 't' THEN
        IS_REQUIREDX := TRUE;
    ELSE
        IS_REQUIREDX := FALSE;
    END IF;

    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_FORM_BODY WHERE ID_FORM_BODY = ID_FORM_BODY1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_FORM_BODY SET 
            NM_FORM_BODY = NM_FORM_BODY1, 
            TIPE_FORM_BODY = TIPE_FORM_BODY1::SIKA.TIPE_FORM_BODY, 
            IS_REQUIRED = IS_REQUIREDX, 
            PARENT = PARENT1, 
            LEVEL = LEVEL1, 
            URUT = URUT1, 
            URUT_GLOBAL = URUT_GLOBAL1 
        WHERE ID_FORM_BODY = ID_FORM_BODY1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_form_body_all(id_form_body1 character varying, nm_form_body1 character varying, tipe_form_body1 character varying, is_required1 character varying, parent1 character varying, level1 integer, urut1 integer, urut_global1 integer) OWNER TO postgres;

--
-- Name: p_update_form_header(character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_update_form_header(id_form_header1 character varying, nm_form_header1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_FORM_HEADER WHERE ID_FORM_HEADER = ID_FORM_HEADER1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_FORM_HEADER SET NM_FORM_HEADER = NM_FORM_HEADER1 WHERE ID_FORM_HEADER = ID_FORM_HEADER1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_form_header(id_form_header1 character varying, nm_form_header1 character varying) OWNER TO inalum;

--
-- Name: p_update_form_relation(character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_update_form_relation(id1 character varying, form_header1 character varying, form_body1 character varying, jenis_sika1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.D_FORM_RELATION WHERE ID_FORM_RELATION = ID1;
    IF CACAH > 0 THEN
        UPDATE SIKA.D_FORM_RELATION
        SET 
        ID_FORM_HEADER = FORM_HEADER1,
        ID_FORM_BODY = FORM_BODY1, 
        ID_JENIS = JENIS_SIKA1 
        WHERE ID_FORM_RELATION = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_form_relation(id1 character varying, form_header1 character varying, form_body1 character varying, jenis_sika1 character varying) OWNER TO inalum;

--
-- Name: p_update_izin_kerja(character varying, text, text, date, time without time zone, time without time zone, text, character varying, date, character varying, character varying, character varying, character varying, character varying, sika.status_izin_kerja); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.p_update_izin_kerja(id1 character varying, nomor_izin1 text, nomor_izin_end1 text, tgl_berlaku1 date, jam_berlaku_mulai1 time without time zone, jam_berlaku_akhir1 time without time zone, catatan1 text, requester1 character varying, tgl_requester1 date, seksi_pj_kerja1 character varying, pj_kerja1 character varying, tgl_pj_kerja1 character varying, pj_lokasi1 character varying, tgl_pj_lokasi1 character varying, status1 sika.status_izin_kerja) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    TGL_PJ_KERJAX DATE;
    PJ_LOKASIX VARCHAR (30);
    TGL_PJ_LOKASIX DATE;
    SEKSI_PJ_KERJAX VARCHAR;
    ID_JENIS1 VARCHAR;
    IS_CHANGED NUMERIC;
    KODE NUMERIC;
    MAXZERO VARCHAR;
    NOMOR_IZINX TEXT;

BEGIN
    SELECT COUNT(*) INTO IS_CHANGED FROM SIKA.TR_IZIN_KERJA WHERE ID_IZIN_KERJA = ID1 AND TGL_BERLAKU = TGL_BERLAKU1;
    IF IS_CHANGED = 0 THEN
        MAXZERO := '0000'; 
        SELECT ID_JENIS INTO ID_JENIS1 FROM SIKA.TR_IZIN_KERJA WHERE ID_IZIN_KERJA = ID1;
        SELECT COUNT(*) INTO KODE FROM SIKA.V_IZIN_KERJA WHERE TO_CHAR(TGL_BERLAKU, 'yyyy') = TO_CHAR(TGL_BERLAKU1::DATE, 'yyyy') AND ID_JENIS = ID_JENIS1::VARCHAR;
        IF KODE = 0 THEN
            NOMOR_IZINX := NOMOR_IZIN1||'0001-'||TO_CHAR(TGL_BERLAKU1, 'yyyy');
        ELSE
            NOMOR_IZINX := SIKA.F_CHECK_NOMOR_IZIN_SIKA(NOMOR_IZIN1, 0, TGL_BERLAKU1, MAXZERO, ID_JENIS1);
        END IF;
    ELSE
        NOMOR_IZINX := NOMOR_IZIN1||NOMOR_IZIN_END1||TO_CHAR(TGL_BERLAKU1, 'yyyy');
    END IF;

    IF TGL_PJ_KERJA1 = '' THEN
        TGL_PJ_KERJAX := NULL;
    ELSE
        TGL_PJ_KERJAX := TGL_PJ_KERJA1;
    END IF;
    IF PJ_LOKASI1 = '' THEN
        PJ_LOKASIX := NULL;
    ELSE
        PJ_LOKASIX := PJ_LOKASI1;
    END IF;
    IF TGL_PJ_LOKASI1 = '' THEN
        TGL_PJ_LOKASIX := NULL;
    ELSE
        TGL_PJ_LOKASIX := TGL_PJ_LOKASI1;
    END IF;

    SELECT COUNT(*) INTO CACAH FROM SIKA.TR_IZIN_KERJA WHERE ID_IZIN_KERJA = ID1;
    IF CACAH > 0 THEN
        UPDATE SIKA.TR_IZIN_KERJA 
        SET 
			NOMOR_IZIN = NOMOR_IZINX,
            TGL_BERLAKU = TGL_BERLAKU1, 
            JAM_BERLAKU_MULAI = JAM_BERLAKU_MULAI1,
            JAM_BERLAKU_AKHIR = JAM_BERLAKU_AKHIR1,
            CATATAN = CATATAN1,
            REQUESTER = REQUESTER1,
            TGL_REQUESTER = TGL_REQUESTER1,
            PJ_KERJA = PJ_KERJA1,
            TGL_PJ_KERJA = TGL_PJ_KERJAX,
            PJ_LOKASI = PJ_LOKASIX,
            TGL_PJ_LOKASI = TGL_PJ_LOKASIX,
            STATUS = STATUS1
        WHERE ID_IZIN_KERJA = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_izin_kerja(id1 character varying, nomor_izin1 text, nomor_izin_end1 text, tgl_berlaku1 date, jam_berlaku_mulai1 time without time zone, jam_berlaku_akhir1 time without time zone, catatan1 text, requester1 character varying, tgl_requester1 date, seksi_pj_kerja1 character varying, pj_kerja1 character varying, tgl_pj_kerja1 character varying, pj_lokasi1 character varying, tgl_pj_lokasi1 character varying, status1 sika.status_izin_kerja) OWNER TO postgres;

--
-- Name: p_update_jenis(character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_update_jenis(id1 character varying, no_dokumen1 character varying, nm_jenis1 character varying, judul1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_JENIS_SIKA WHERE ID_JENIS = ID1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_JENIS_SIKA 
        SET 
        NO_DOKUMEN = NO_DOKUMEN1, 
        NM_JENIS = NM_JENIS1, 
        JUDUL = JUDUL1 
        WHERE ID_JENIS = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_jenis(id1 character varying, no_dokumen1 character varying, nm_jenis1 character varying, judul1 character varying) OWNER TO inalum;

--
-- Name: p_update_menu(character varying, character varying, character varying, character varying, sika.status); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.p_update_menu(id_menu1 character varying, nm_menu1 character varying, link_menu1 character varying, icon_menu1 character varying, status1 sika.status) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_MENU WHERE ID_MENU = ID_MENU1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_MENU SET NM_MENU = NM_MENU1, LINK_MENU = LINK_MENU1, ICON_MENU = ICON_MENU1, STATUS = STATUS1 WHERE ID_MENU = ID_MENU1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_menu(id_menu1 character varying, nm_menu1 character varying, link_menu1 character varying, icon_menu1 character varying, status1 sika.status) OWNER TO postgres;

--
-- Name: p_update_menu_all(character varying, character varying, character varying, character varying, sika.status, character varying, integer, integer, integer); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.p_update_menu_all(id_menu1 character varying, nm_menu1 character varying, link_menu1 character varying, icon_menu1 character varying, status1 sika.status, id_parent1 character varying, level1 integer, urut1 integer, urut_global1 integer) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_MENU WHERE ID_MENU = ID_MENU1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_MENU SET 
            NM_MENU = NM_MENU1, 
            LINK_MENU = LINK_MENU1, 
            ICON_MENU = ICON_MENU1, 
            STATUS = STATUS1, 
            ID_PARENT = ID_PARENT1, 
            LEVEL = LEVEL1, 
            URUT = URUT1, 
            URUT_GLOBAL = URUT_GLOBAL1 
        WHERE ID_MENU = ID_MENU1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_menu_all(id_menu1 character varying, nm_menu1 character varying, link_menu1 character varying, icon_menu1 character varying, status1 sika.status, id_parent1 character varying, level1 integer, urut1 integer, urut_global1 integer) OWNER TO postgres;

--
-- Name: p_update_permission(character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_update_permission(id1 character varying, role1 character varying, menu1 character varying, akses1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.D_PERMISSIONS WHERE ID_PERMISSION = ID1;
    IF CACAH > 0 THEN
        UPDATE SIKA.D_PERMISSIONS
        SET 
        ID_ROLE = ROLE1,
        ID_MENU = MENU1, 
        ID_ACTION = AKSES1 
        WHERE ID_PERMISSION = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_permission(id1 character varying, role1 character varying, menu1 character varying, akses1 character varying) OWNER TO inalum;

--
-- Name: p_update_permission_private(character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_update_permission_private(id1 character varying, user1 character varying, menu1 character varying, akses1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.D_PERMISSIONS_PRIVATE WHERE ID_PERMISSION_PRIVATE = ID1;
    IF CACAH > 0 THEN
        UPDATE SIKA.D_PERMISSIONS_PRIVATE
        SET 
        UID_USER_SYSTEM = USER1,
        ID_MENU = MENU1, 
        ID_ACTION = AKSES1 
        WHERE ID_PERMISSION_PRIVATE = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_permission_private(id1 character varying, user1 character varying, menu1 character varying, akses1 character varying) OWNER TO inalum;

--
-- Name: p_update_relasi_izin_kerja(character varying, character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_update_relasi_izin_kerja(id1 character varying, izin_kerja1 character varying, form_body1 character varying, isian1 character varying, other1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.D_RELASI_IZIN_KERJA WHERE ID_RELASI_IZIN_KERJA = ID1;
    IF CACAH > 0 THEN
        UPDATE SIKA.D_RELASI_IZIN_KERJA
        SET 
        ID_IZIN_KERJA = IZIN_KERJA1,
        ID_FORM_BODY = FORM_BODY1, 
        ISIAN = ISIAN1, 
        OTHER = OTHER1 
        WHERE ID_RELASI_IZIN_KERJA = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_relasi_izin_kerja(id1 character varying, izin_kerja1 character varying, form_body1 character varying, isian1 character varying, other1 character varying) OWNER TO inalum;

--
-- Name: p_update_role(character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_update_role(id_role1 character varying, nm_role1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_ROLE WHERE ID_ROLE = ID_ROLE1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_ROLE SET NM_ROLE = NM_ROLE1 WHERE ID_ROLE = ID_ROLE1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_role(id_role1 character varying, nm_role1 character varying) OWNER TO inalum;

--
-- Name: p_update_seksi(character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_update_seksi(id_seksi1 character varying, nm_seksi1 character varying, alias_seksi1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_SEKSI WHERE ID_SEKSI = ID_SEKSI1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_SEKSI 
        SET 
        NM_SEKSI = NM_SEKSI1,
        ALIAS_SEKSI = ALIAS_SEKSI1
        WHERE ID_SEKSI = ID_SEKSI1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_seksi(id_seksi1 character varying, nm_seksi1 character varying, alias_seksi1 character varying) OWNER TO inalum;

--
-- Name: p_update_status(character varying, sika.status_bool); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_update_status(id_user1 character varying, status1 sika.status_bool) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
BEGIN
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_USER WHERE ID_USER = ID_USER1;
    IF CACAH > 0 THEN
        UPDATE SIKA.MD_USER 
        SET 
        STATUS = STATUS1
        WHERE ID_USER = ID_USER1;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_status(id_user1 character varying, status1 sika.status_bool) OWNER TO inalum;

--
-- Name: p_update_status_izin_kerja(character varying, character varying, character varying, sika.status_izin_kerja); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.p_update_status_izin_kerja(id1 character varying, tgl_pj_kerja1 character varying, tgl_pj_lokasi1 character varying, status1 sika.status_izin_kerja) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    TGL_PJ_KERJAX DATE;
    TGL_PJ_LOKASIX DATE;

BEGIN
    IF TGL_PJ_KERJA1 = '' THEN
        TGL_PJ_KERJAX := NULL;
    ELSE
        TGL_PJ_KERJAX := TGL_PJ_KERJA1;
    END IF;
    IF TGL_PJ_LOKASI1 = '' THEN
        TGL_PJ_LOKASIX := NULL;
    ELSE
        TGL_PJ_LOKASIX := TGL_PJ_LOKASI1;
    END IF;

    SELECT COUNT(*) INTO CACAH FROM SIKA.TR_IZIN_KERJA WHERE ID_IZIN_KERJA = ID1;
    IF CACAH > 0 THEN
        UPDATE SIKA.TR_IZIN_KERJA 
        SET 
            TGL_PJ_KERJA = TGL_PJ_KERJAX,
            TGL_PJ_LOKASI = TGL_PJ_LOKASIX,
            STATUS = STATUS1
        WHERE ID_IZIN_KERJA = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_status_izin_kerja(id1 character varying, tgl_pj_kerja1 character varying, tgl_pj_lokasi1 character varying, status1 sika.status_izin_kerja) OWNER TO postgres;

--
-- Name: p_update_status_izin_kerja(character varying, character varying, character varying, sika.status_izin_kerja, text); Type: FUNCTION; Schema: sika; Owner: postgres
--

CREATE FUNCTION sika.p_update_status_izin_kerja(id1 character varying, tgl_pj_kerja1 character varying, tgl_pj_lokasi1 character varying, status1 sika.status_izin_kerja, alasan1 text) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    TGL_PJ_KERJAX DATE;
    TGL_PJ_LOKASIX DATE;
    ALASANX TEXT;

BEGIN
    IF TGL_PJ_KERJA1 = '' THEN
        TGL_PJ_KERJAX := NULL;
    ELSE
        TGL_PJ_KERJAX := TGL_PJ_KERJA1;
    END IF;
    IF TGL_PJ_LOKASI1 = '' THEN
        TGL_PJ_LOKASIX := NULL;
    ELSE
        TGL_PJ_LOKASIX := TGL_PJ_LOKASI1;
    END IF;
    IF ALASAN1 = '' THEN
        ALASANX := NULL;
    ELSE
        ALASANX := ALASAN1;
    END IF;

    SELECT COUNT(*) INTO CACAH FROM SIKA.TR_IZIN_KERJA WHERE ID_IZIN_KERJA = ID1;
    IF CACAH > 0 THEN
        UPDATE SIKA.TR_IZIN_KERJA 
        SET 
            TGL_PJ_KERJA = TGL_PJ_KERJAX,
            TGL_PJ_LOKASI = TGL_PJ_LOKASIX,
            STATUS = STATUS1,
            ALASAN = ALASANX
        WHERE ID_IZIN_KERJA = ID1;
        RETURN TRUE;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_status_izin_kerja(id1 character varying, tgl_pj_kerja1 character varying, tgl_pj_lokasi1 character varying, status1 sika.status_izin_kerja, alasan1 text) OWNER TO postgres;

--
-- Name: p_update_user(character varying, character varying, character varying, character varying, character varying, character varying, character varying, character varying); Type: FUNCTION; Schema: sika; Owner: inalum
--

CREATE FUNCTION sika.p_update_user(id_user1 character varying, nama1 character varying, id_seksi1 character varying, username1 character varying, email1 character varying, password1 character varying, id_role1 character varying, nm_perusahaan1 character varying) RETURNS character varying
    LANGUAGE plpgsql
    AS $$
DECLARE
    CACAH NUMERIC;
    ID_SEKSIX VARCHAR;

BEGIN
    IF ID_SEKSI1='lainnya' THEN 
        SELECT SIKA.P_INSERT_PERUSAHAAN(NM_PERUSAHAAN1) INTO ID_SEKSIX;
        ELSE
        ID_SEKSIX=ID_SEKSI1;
    END IF;
    SELECT COUNT(*) INTO CACAH FROM SIKA.MD_USER WHERE ID_USER = ID_USER1;
    IF CACAH > 0 THEN
        IF PASSWORD1 != '' THEN
            UPDATE SIKA.MD_USER 
            SET 
            NAMA = NAMA1, 
            ID_SEKSI = ID_SEKSIX,
            USERNAME = USERNAME1, 
            EMAIL = EMAIL1, 
            PASSWORD = PASSWORD1, 
            ID_ROLE = ID_ROLE1
            WHERE ID_USER = ID_USER1;
        ELSE
            UPDATE SIKA.MD_USER 
            SET 
            NAMA = NAMA1, 
            ID_SEKSI = ID_SEKSIX,
            USERNAME = USERNAME1,
            EMAIL = EMAIL1,
            ID_ROLE = ID_ROLE1
            WHERE ID_USER = ID_USER1;
        END IF;
    ELSE
        RAISE EXCEPTION 'Data Tidak Ditemukan.';
        RETURN FALSE;
    END IF;
    
    RETURN TRUE;
END;
$$;


ALTER FUNCTION sika.p_update_user(id_user1 character varying, nama1 character varying, id_seksi1 character varying, username1 character varying, email1 character varying, password1 character varying, id_role1 character varying, nm_perusahaan1 character varying) OWNER TO inalum;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: d_form_relation; Type: TABLE; Schema: sika; Owner: inalum
--

CREATE TABLE sika.d_form_relation (
    id_form_relation character varying(15) NOT NULL,
    id_form_header character varying(10),
    id_form_body character varying(10),
    id_jenis character varying(10)
);


ALTER TABLE sika.d_form_relation OWNER TO inalum;

--
-- Name: d_permissions; Type: TABLE; Schema: sika; Owner: inalum
--

CREATE TABLE sika.d_permissions (
    id_permission character varying(15) NOT NULL,
    id_role character varying(10),
    id_menu character varying(10),
    id_action character varying(10)
);


ALTER TABLE sika.d_permissions OWNER TO inalum;

--
-- Name: d_permissions_private; Type: TABLE; Schema: sika; Owner: inalum
--

CREATE TABLE sika.d_permissions_private (
    id_permission character varying(15) NOT NULL,
    id_user character varying(10),
    id_menu character varying(10),
    id_action character varying(10)
);


ALTER TABLE sika.d_permissions_private OWNER TO inalum;

--
-- Name: d_relasi_izin_kerja; Type: TABLE; Schema: sika; Owner: inalum
--

CREATE TABLE sika.d_relasi_izin_kerja (
    id_relasi_izin_kerja character varying(60) NOT NULL,
    id_izin_kerja character varying(15),
    id_form_body character varying(10),
    isian text,
    other text,
    files text
);


ALTER TABLE sika.d_relasi_izin_kerja OWNER TO inalum;

--
-- Name: md_action; Type: TABLE; Schema: sika; Owner: inalum
--

CREATE TABLE sika.md_action (
    id_action character varying(10) NOT NULL,
    kode character varying(25),
    nm_action character varying(100),
    deskripsi text,
    tgl_insert timestamp without time zone
);


ALTER TABLE sika.md_action OWNER TO inalum;

--
-- Name: md_form_body; Type: TABLE; Schema: sika; Owner: postgres
--

CREATE TABLE sika.md_form_body (
    id_form_body character varying(10) NOT NULL,
    nm_form_body text,
    tipe_form_body sika.tipe_form_body,
    level integer,
    urut integer,
    urut_global integer,
    parent character varying(10),
    is_required boolean,
    tgl_insert date,
    need_upload boolean
);


ALTER TABLE sika.md_form_body OWNER TO postgres;

--
-- Name: md_form_header; Type: TABLE; Schema: sika; Owner: inalum
--

CREATE TABLE sika.md_form_header (
    id_form_header character varying(10) NOT NULL,
    nm_form_header character varying(50),
    is_deleted boolean DEFAULT false,
    tgl_insert date
);


ALTER TABLE sika.md_form_header OWNER TO inalum;

--
-- Name: md_jenis_sika; Type: TABLE; Schema: sika; Owner: inalum
--

CREATE TABLE sika.md_jenis_sika (
    id_jenis character varying(10) NOT NULL,
    nm_jenis character varying(50),
    no_dokumen character varying(50),
    judul character varying(100),
    link_menu character varying(50),
    is_deleted boolean DEFAULT false,
    tgl_insert date
);


ALTER TABLE sika.md_jenis_sika OWNER TO inalum;

--
-- Name: md_menu; Type: TABLE; Schema: sika; Owner: inalum
--

CREATE TABLE sika.md_menu (
    id_menu character varying(10) NOT NULL,
    nm_menu character varying(100),
    icon_menu text,
    link_menu character varying(250),
    id_parent character varying(10),
    status sika.status,
    level integer,
    urut integer,
    urut_global integer,
    tgl_insert timestamp without time zone
);


ALTER TABLE sika.md_menu OWNER TO inalum;

--
-- Name: md_role; Type: TABLE; Schema: sika; Owner: inalum
--

CREATE TABLE sika.md_role (
    id_role character varying(10) NOT NULL,
    nm_role character varying(100),
    status sika.status DEFAULT 'A'::sika.status,
    is_deleted boolean DEFAULT false,
    tgl_insert date
);


ALTER TABLE sika.md_role OWNER TO inalum;

--
-- Name: md_seksi; Type: TABLE; Schema: sika; Owner: inalum
--

CREATE TABLE sika.md_seksi (
    id_seksi character varying(10) NOT NULL,
    nm_seksi character varying(100),
    alias_seksi character varying(100),
    jenis sika.jenis_seksi DEFAULT 'DEFAULT'::sika.jenis_seksi,
    is_deleted boolean DEFAULT false,
    tgl_insert date
);


ALTER TABLE sika.md_seksi OWNER TO inalum;

--
-- Name: md_user; Type: TABLE; Schema: sika; Owner: inalum
--

CREATE TABLE sika.md_user (
    id_user character varying(30) NOT NULL,
    nama character varying(250),
    username character varying(100),
    email character varying(100),
    password character varying(150),
    id_seksi character varying(10),
    id_role character varying(10),
    status sika.status_bool DEFAULT '1'::sika.status_bool,
    is_deleted boolean DEFAULT false,
    tgl_insert date
);


ALTER TABLE sika.md_user OWNER TO inalum;

--
-- Name: tr_izin_kerja; Type: TABLE; Schema: sika; Owner: inalum
--

CREATE TABLE sika.tr_izin_kerja (
    id_izin_kerja character varying(15) NOT NULL,
    id_jenis character varying(10),
    nomor_izin text,
    tgl_berlaku date,
    jam_berlaku_mulai time without time zone,
    jam_berlaku_akhir time without time zone,
    catatan text,
    requester character varying(30),
    tgl_requester date,
    pj_kerja character varying(30),
    tgl_pj_kerja date,
    pj_lokasi character varying(30) DEFAULT NULL::character varying,
    tgl_pj_lokasi date,
    status sika.status_izin_kerja,
    is_deleted boolean DEFAULT false,
    tgl_insert date,
    alasan text
);


ALTER TABLE sika.tr_izin_kerja OWNER TO inalum;

--
-- Name: v_form_relation_body; Type: VIEW; Schema: sika; Owner: postgres
--

CREATE VIEW sika.v_form_relation_body AS
 SELECT b.parent,
    b.id_form_body,
    b.nm_form_body,
    b.tipe_form_body,
    b.urut,
    b.urut_global,
    b.level,
    b.is_required,
    b.need_upload,
    a.id_jenis
   FROM (sika.d_form_relation a
     LEFT JOIN sika.md_form_body b ON (((a.id_form_body)::text = (b.id_form_body)::text)))
  ORDER BY b.id_form_body, b.urut, b.urut_global;


ALTER TABLE sika.v_form_relation_body OWNER TO postgres;

--
-- Name: v_form_relation_header; Type: VIEW; Schema: sika; Owner: inalum
--

CREATE VIEW sika.v_form_relation_header AS
 SELECT DISTINCT b.id_form_header,
    b.nm_form_header,
    a.id_jenis
   FROM (sika.d_form_relation a
     LEFT JOIN sika.md_form_header b ON (((a.id_form_header)::text = (b.id_form_header)::text)))
  ORDER BY b.id_form_header;


ALTER TABLE sika.v_form_relation_header OWNER TO inalum;

--
-- Name: v_izin_kerja; Type: VIEW; Schema: sika; Owner: postgres
--

CREATE VIEW sika.v_izin_kerja AS
 SELECT ( SELECT to_char((x.tgl_berlaku)::timestamp with time zone, 'yyyy'::text) AS to_char) AS tahun,
    x.id_izin_kerja,
    x.id_jenis,
    x.nomor_izin,
    x.tgl_berlaku,
    x.jam_berlaku_mulai,
    x.jam_berlaku_akhir,
    x.catatan,
    x.requester,
    x.nm_requester,
    x.email_requester,
    x.id_seksi_requester,
    x.jenis_requester,
    x.seksi_requester,
    x.tgl_requester,
    x.id_role_requester,
    x.nm_role_requester,
    x.pj_kerja,
    x.nm_pj_kerja,
    x.email_pj_kerja,
    x.id_seksi_pj_kerja,
    x.jenis_pj_kerja,
    x.seksi_pj_kerja,
    x.tgl_pj_kerja,
    x.id_role_pj_kerja,
    x.nm_role_pj_kerja,
    x.pj_lokasi,
    x.nm_pj_lokasi,
    x.email_pj_lokasi,
    x.id_seksi_pj_lokasi,
    x.jenis_pj_lokasi,
    x.seksi_pj_lokasi,
    x.tgl_pj_lokasi,
    x.id_role_pj_lokasi,
    x.nm_role_pj_lokasi,
    x.nm_jenis_sika,
    x.status,
    x.alasan,
    x.next_verif,
    x.email_admin,
    string_agg((y.email)::text, ','::text) AS email_seksi
   FROM (( SELECT a.id_izin_kerja,
            a.id_jenis,
            a.nomor_izin,
            a.tgl_berlaku,
            a.jam_berlaku_mulai,
            a.jam_berlaku_akhir,
            a.catatan,
            a.requester,
            b.nama AS nm_requester,
            b.email AS email_requester,
            b.id_seksi AS id_seksi_requester,
            e.jenis AS jenis_requester,
            e.alias_seksi AS seksi_requester,
            a.tgl_requester,
            h.id_role AS id_role_requester,
            h.nm_role AS nm_role_requester,
            a.pj_kerja,
            c.nama AS nm_pj_kerja,
            c.email AS email_pj_kerja,
            c.id_seksi AS id_seksi_pj_kerja,
            f.jenis AS jenis_pj_kerja,
            f.alias_seksi AS seksi_pj_kerja,
            a.tgl_pj_kerja,
            i.id_role AS id_role_pj_kerja,
            i.nm_role AS nm_role_pj_kerja,
            a.pj_lokasi,
            d.nama AS nm_pj_lokasi,
            d.email AS email_pj_lokasi,
            d.id_seksi AS id_seksi_pj_lokasi,
            g.jenis AS jenis_pj_lokasi,
            g.alias_seksi AS seksi_pj_lokasi,
            a.tgl_pj_lokasi,
            j.id_role AS id_role_pj_lokasi,
            j.nm_role AS nm_role_pj_lokasi,
            k.nm_jenis AS nm_jenis_sika,
            a.status,
            a.alasan,
                CASE
                    WHEN (a.status = 'REQUESTED'::sika.status_izin_kerja) THEN a.pj_kerja
                    WHEN (a.status = 'ACCEPTED'::sika.status_izin_kerja) THEN a.pj_lokasi
                    WHEN (a.status = 'DONE'::sika.status_izin_kerja) THEN 'RS002'::character varying
                    ELSE NULL::character varying
                END AS next_verif,
            ( SELECT string_agg((md_user.email)::text, ','::text) AS string_agg
                   FROM sika.md_user
                  WHERE ((md_user.id_role)::text = 'RS002'::text)) AS email_admin
           FROM ((((((((((sika.tr_izin_kerja a
             LEFT JOIN sika.md_user b ON (((a.requester)::text = (b.id_user)::text)))
             LEFT JOIN sika.md_user c ON (((a.pj_kerja)::text = (c.id_user)::text)))
             LEFT JOIN sika.md_user d ON (((a.pj_lokasi)::text = (d.id_user)::text)))
             LEFT JOIN sika.md_seksi e ON (((b.id_seksi)::text = (e.id_seksi)::text)))
             LEFT JOIN sika.md_seksi f ON (((c.id_seksi)::text = (f.id_seksi)::text)))
             LEFT JOIN sika.md_seksi g ON (((d.id_seksi)::text = (g.id_seksi)::text)))
             LEFT JOIN sika.md_role h ON (((b.id_role)::text = (h.id_role)::text)))
             LEFT JOIN sika.md_role i ON (((c.id_role)::text = (i.id_role)::text)))
             LEFT JOIN sika.md_role j ON (((d.id_role)::text = (j.id_role)::text)))
             LEFT JOIN sika.md_jenis_sika k ON (((a.id_jenis)::text = (k.id_jenis)::text)))
          WHERE (a.is_deleted = false)) x
     LEFT JOIN sika.md_user y ON ((((x.id_seksi_pj_kerja)::text = (y.id_seksi)::text) AND ((y.id_role)::text = 'RS004'::text) AND ((x.id_role_requester)::text = 'RS003'::text))))
  GROUP BY x.id_izin_kerja, x.id_jenis, x.nomor_izin, x.tgl_berlaku, x.jam_berlaku_mulai, x.jam_berlaku_akhir, x.catatan, x.requester, x.nm_requester, x.email_requester, x.id_seksi_requester, x.jenis_requester, x.seksi_requester, x.tgl_requester, x.id_role_requester, x.nm_role_requester, x.pj_kerja, x.nm_pj_kerja, x.email_pj_kerja, x.id_seksi_pj_kerja, x.jenis_pj_kerja, x.seksi_pj_kerja, x.tgl_pj_kerja, x.id_role_pj_kerja, x.nm_role_pj_kerja, x.pj_lokasi, x.nm_pj_lokasi, x.email_pj_lokasi, x.id_seksi_pj_lokasi, x.jenis_pj_lokasi, x.seksi_pj_lokasi, x.tgl_pj_lokasi, x.id_role_pj_lokasi, x.nm_role_pj_lokasi, x.nm_jenis_sika, x.status, x.alasan, x.next_verif, x.email_admin
  ORDER BY x.tgl_requester DESC;


ALTER TABLE sika.v_izin_kerja OWNER TO postgres;

--
-- Name: v_menu_private; Type: VIEW; Schema: sika; Owner: inalum
--

CREATE VIEW sika.v_menu_private AS
 SELECT a.id_permission,
    a.id_user,
    a.id_menu,
    b.nm_menu,
    b.icon_menu,
    b.link_menu,
    b.id_parent,
    b.status,
    b.level,
    b.urut,
    b.urut_global,
    c.id_action,
    c.kode,
    c.nm_action,
    c.deskripsi
   FROM ((sika.d_permissions_private a
     JOIN sika.md_menu b ON (((a.id_menu)::text = (b.id_menu)::text)))
     JOIN sika.md_action c ON (((a.id_action)::text = (c.id_action)::text)))
  WHERE (b.status = 'A'::sika.status)
  ORDER BY b.level, b.urut, b.urut_global;


ALTER TABLE sika.v_menu_private OWNER TO inalum;

--
-- Name: v_menu_public; Type: VIEW; Schema: sika; Owner: inalum
--

CREATE VIEW sika.v_menu_public AS
 SELECT a.id_permission,
    a.id_role,
    a.id_menu,
    b.nm_menu,
    b.icon_menu,
    b.link_menu,
    b.id_parent,
    b.status,
    b.level,
    b.urut,
    b.urut_global,
    c.id_action,
    c.kode,
    c.nm_action,
    c.deskripsi
   FROM ((sika.d_permissions a
     JOIN sika.md_menu b ON (((a.id_menu)::text = (b.id_menu)::text)))
     JOIN sika.md_action c ON (((a.id_action)::text = (c.id_action)::text)))
  WHERE (b.status = 'A'::sika.status)
  ORDER BY b.level, b.urut, b.urut_global;


ALTER TABLE sika.v_menu_public OWNER TO inalum;

--
-- Data for Name: d_form_relation; Type: TABLE DATA; Schema: sika; Owner: inalum
--

COPY sika.d_form_relation (id_form_relation, id_form_header, id_form_body, id_jenis) FROM stdin;
1fcf2ddaa759664	FH005	FB000047	0f7553aa4e
8c380a2b535178a	FH008	FB000111	9a75badfd8
4e95ac18447d07d	FH008	FB000118	9a75badfd8
032a53fcabb6ff3	FH009	FB000148	ad28f05869
1b2ada59a8eb083	FH008	FB000123	0f7553aa4e
31e8ff3045f59d0	FH008	FB000125	12d9a40b86
05d32a831b37263	FH009	FB000139	5bbae6a23e
06267dbd87d38fa	FH009	FB000151	9a75badfd8
7e595369564aeb5	FH008	FB000127	ad28f05869
0662d83d8837d4f	FH009	FB000139	0f7553aa4e
0765a884482af7c	FH002	FB000046	0f7553aa4e
07c8febc685f7c9	FH009	FB000155	5bbae6a23e
829f4787690a77c	FH005	FB000052	0f7553aa4e
bd9cc1732fb2a6d	FH005	FB000059	5bbae6a23e
f9c3002ecdbbfee	FH008	FB000128	5bbae6a23e
8a7fea25a6e037e	FH008	FB000188	12d9a40b86
0b3b52f28358987	FH002	FB000182	ad28f05869
9738fe868f034cf	FH008	FB000187	5bbae6a23e
0d59698c317aac8	FH001	FB000011	12d9a40b86
0dec97cd709970f	FH001	FB000009	12d9a40b86
0e0eaf2b811f0cd	FH009	FB000148	9a75badfd8
0e27859edff6923	FH003	FB000013	9a75badfd8
0f87a402a9a779e	FH001	FB000009	ad28f05869
11acdc052bc264d	FH001	FB000008	ad28f05869
12bd1a6fbe9091e	FH009	FB000130	12d9a40b86
12be9da0647d2f1	FH009	FB000150	ad28f05869
14189cd1fedcc94	FH001	FB000001	9a75badfd8
3212d4255d755a2	FH004	FB000022	ad28f05869
ec0903383891c82	FH004	FB000024	12d9a40b86
adbf386c6ed7ac4	FH004	FB000027	ad28f05869
15fc4d00d4e1e37	FH009	FB000142	5bbae6a23e
a477a23d5c57a15	FH004	FB000031	ad28f05869
eeb299280ded2b8	FH004	FB000033	ad28f05869
0a05b525c814f42	FH004	FB000036	0f7553aa4e
6f08a45c49a98f4	FH004	FB000040	ad28f05869
b4b9a891e3f8b7a	FH004	FB000042	ad28f05869
1abfd1223bf7349	FH009	FB000139	ad28f05869
1ada4b94bc6a920	FH003	FB000017	9a75badfd8
1aecc7494973aa5	FH009	FB000133	9a75badfd8
1cb00a47d7f25fb	FH001	FB000005	ad28f05869
1cb40197bb76c1f	FH009	FB000131	9a75badfd8
1e9692217a94727	FH009	FB000131	12d9a40b86
206cc635df8a78e	FH001	FB000008	12d9a40b86
21ffada3da4f5c6	FH009	FB000155	0f7553aa4e
234dece679c05ea	FH009	FB000142	ad28f05869
24371a8ba93fbff	FH003	FB000014	9a75badfd8
2764959b6c070d1	FH001	FB000005	12d9a40b86
2779a4ffd43a5fb	FH009	FB000157	9a75badfd8
283ebb12f421c48	FH001	FB000010	0f7553aa4e
28580e572f2fad0	FH001	FB000011	ad28f05869
2895a149a588637	FH009	FB000139	12d9a40b86
29c0922c9fc0cb0	FH002	FB000045	ad28f05869
2c0ea60c5788f86	FH009	FB000139	9a75badfd8
2fb1d06f88deb70	FH001	FB000002	ad28f05869
347bd388d586a23	FH009	FB000141	9a75badfd8
35ab2eb6061ac62	FH009	FB000155	9a75badfd8
35fe0794412ada4	FH002	FB000044	0f7553aa4e
373e6efbd8e5ff3	FH009	FB000150	9a75badfd8
39c7c402c581387	FH002	FB000182	12d9a40b86
3a8a0c697714594	FH009	FB000131	5bbae6a23e
6ba56dafa499641	FH008	FB000112	9a75badfd8
3ba65ea01e05a64	FH009	FB000133	12d9a40b86
22cf46f577a40ee	FH008	FB000119	9a75badfd8
9d56a1d4c5c9628	FH005	FB000048	0f7553aa4e
08b5b0f41c2232d	FH008	FB000123	5bbae6a23e
8476a2d5de8880f	FH008	FB000125	0f7553aa4e
3ed3544f041240f	FH009	FB000150	12d9a40b86
0850347de289907	FH005	FB000053	5bbae6a23e
3f5b6f83f50f749	FH001	FB000001	ad28f05869
3fa73dfca733a04	FH009	FB000153	12d9a40b86
dace8e5f83b1d93	FH008	FB000127	12d9a40b86
2e39d1c71844ecd	FH008	FB000129	ad28f05869
0c6c46ceff46aee	FH005	FB000060	5bbae6a23e
41c33f0341a3154	FH002	FB000045	0f7553aa4e
11cb4dbd140bd02	FH008	FB000188	0f7553aa4e
43718f914fa25df	FH002	FB000045	5bbae6a23e
437c9a4217932e1	FH009	FB000135	5bbae6a23e
43bd52caf8c546e	FH009	FB000148	5bbae6a23e
43e48cd1dd1578e	FH002	FB000043	12d9a40b86
473024c0c43aa76	FH009	FB000153	9a75badfd8
479047091eff558	FH002	FB000046	12d9a40b86
488b76e2d578148	FH001	FB000004	0f7553aa4e
48d15e6a216d68c	FH009	FB000157	ad28f05869
6dc76d29b9ecff4	FH004	FB000020	ad28f05869
d4b62a9ef1eed62	FH004	FB000022	9a75badfd8
6e09946aca3b525	FH004	FB000025	ad28f05869
4a77e8ec48c38b5	FH009	FB000155	12d9a40b86
67738ab248ec908	FH004	FB000027	9a75badfd8
bafb3f8ee5418e8	FH004	FB000031	9a75badfd8
6a280afc942c099	FH004	FB000033	9a75badfd8
4d60897f42d056a	FH002	FB000043	0f7553aa4e
0a619c84518ca7e	FH004	FB000037	0f7553aa4e
1cf405408705ab2	FH004	FB000040	9a75badfd8
e690bf30af3ae21	FH004	FB000042	9a75badfd8
4f9b680e49b6f3f	FH009	FB000137	5bbae6a23e
52e640bbbad5bcb	FH001	FB000181	5bbae6a23e
5c1435bd14d1c0a	FH001	FB000008	0f7553aa4e
617697048c4e9e7	FH009	FB000137	ad28f05869
61b5464c1cd485c	FH009	FB000153	5bbae6a23e
637e2e2a589d21e	FH002	FB000043	ad28f05869
63e17dcf2d6dee4	FH001	FB000009	0f7553aa4e
65d0f6ee539c32a	FH009	FB000141	0f7553aa4e
66d60c91504a226	FH001	FB000007	9a75badfd8
6cc519b3391b230	FH009	FB000131	0f7553aa4e
6fba5f61952fcf7	FH009	FB000137	12d9a40b86
708689658a97668	FH009	FB000131	ad28f05869
39995add2e7dde7	FH008	FB000113	9a75badfd8
75094546cc72c3d	FH009	FB000148	12d9a40b86
c863188493e72d7	FH005	FB000049	0f7553aa4e
76723a52abec273	FH008	FB000120	9a75badfd8
d829b91aecf7dab	FH008	FB000124	ad28f05869
763dfcbb6c066e7	FH001	FB000009	5bbae6a23e
0c46eda21d34a37	FH008	FB000125	5bbae6a23e
f1d0852b6c71fcb	FH008	FB000127	0f7553aa4e
43971c480ec44b7	FH008	FB000129	9a75badfd8
87281696a0d276f	FH008	FB000188	5bbae6a23e
531e617a2792653	FH005	FB000054	5bbae6a23e
95386e9d16d7f9e	FH005	FB000061	5bbae6a23e
7a292ab16e2e5bb	FH001	FB000004	12d9a40b86
7c4bb87b9474ed3	FH003	FB000183	9a75badfd8
7cf4e1dcbe093e7	FH001	FB000002	12d9a40b86
c20f8e94fbcc615	FH004	FB000020	9a75badfd8
1397659a39d7820	FH004	FB000022	12d9a40b86
810fd8e9cb62e3e	FH001	FB000003	ad28f05869
2d257820fd76d84	FH004	FB000025	9a75badfd8
817e4ba7bf1bd0b	FH009	FB000151	0f7553aa4e
e3fac30d0dbb12d	FH004	FB000027	12d9a40b86
82902756db019e5	FH009	FB000137	9a75badfd8
846f0e920d10331	FH001	FB000011	9a75badfd8
84eaa0ad734d4ba	FH001	FB000010	5bbae6a23e
5fb3a50db60a29b	FH004	FB000031	12d9a40b86
45437b9f4fd77c5	FH004	FB000033	12d9a40b86
867e650f62ac42b	FH002	FB000044	12d9a40b86
87bc7810ddd35d6	FH009	FB000146	12d9a40b86
687d2ee9f498bc8	FH004	FB000038	ad28f05869
88385b86e5caf20	FH009	FB000146	9a75badfd8
22d312d028cd3a2	FH004	FB000040	12d9a40b86
045595a3a6199fa	FH004	FB000042	12d9a40b86
8e34d94a5d4c913	FH009	FB000141	12d9a40b86
901b23121acbc11	FH009	FB000146	5bbae6a23e
9051b6f4b3c1fb4	FH003	FB000015	9a75badfd8
90c03a684c5e846	FH002	FB000045	12d9a40b86
919a2e0d9d16218	FH003	FB000016	9a75badfd8
922c379807dd5c3	FH009	FB000142	0f7553aa4e
93ae7305e53b85b	FH006	FB000186	12d9a40b86
97e95c561a02334	FH009	FB000135	9a75badfd8
97ee513622c817b	FH009	FB000137	0f7553aa4e
982624ecf116924	FH001	FB000008	9a75badfd8
99fdd08d3d5931c	FH009	FB000135	ad28f05869
9ab264c167cae2b	FH002	FB000046	5bbae6a23e
9b6bb7dc54e9bf9	FH003	FB000012	9a75badfd8
9ba8d9b355943eb	FH002	FB000182	5bbae6a23e
9f168ce7a3b1cd7	FH009	FB000133	ad28f05869
a038b58848406cb	FH002	FB000046	ad28f05869
a1a4e5aaa60b257	FH009	FB000157	12d9a40b86
a1a96af4faf3137	FH006	FB000065	12d9a40b86
a2eb1a9bc17fd9d	FH001	FB000003	5bbae6a23e
a5e2fb220576e7b	FH009	FB000142	12d9a40b86
a98b9d9d4c9132b	FH003	FB000018	9a75badfd8
c73bd7cbc5c694c	FH008	FB000114	9a75badfd8
aae20de908cb531	FH009	FB000151	12d9a40b86
98a99f8e22f982b	FH008	FB000121	9a75badfd8
accaed47c8eb02a	FH001	FB000003	12d9a40b86
6ac2be6826417a0	FH008	FB000124	12d9a40b86
ae54e8b1c1fb9c4	FH009	FB000155	ad28f05869
3886170f19935e0	FH008	FB000126	ad28f05869
8fba47b2c9b1a06	FH008	FB000127	5bbae6a23e
6bebf3b69b4b296	FH008	FB000129	12d9a40b86
cd45f87244b66d7	FH005	FB000050	0f7553aa4e
b1d639b734a3f0d	FH001	FB000008	5bbae6a23e
b37ce8f8f222b69	FH001	FB000009	9a75badfd8
b522a5cd5c35b50	FH009	FB000130	5bbae6a23e
b52cf6c8b30824a	FH001	FB000010	12d9a40b86
b5c526a2e6a1626	FH009	FB000153	0f7553aa4e
aa2bf4228201419	FH008	FB000187	ad28f05869
a8529dc108d63fa	FH005	FB000055	5bbae6a23e
246707d958ef69d	FH005	FB000062	5bbae6a23e
b87da2957029153	FH002	FB000043	5bbae6a23e
b9365f0562c1bfb	FH009	FB000144	9a75badfd8
bb6810a308eeff4	FH006	FB000066	12d9a40b86
bce17cea2c4524d	FH001	FB000010	ad28f05869
bcf60cf145f92cf	FH009	FB000144	12d9a40b86
bdbfe318f8211a1	FH009	FB000135	12d9a40b86
be7f3a8a92f52c5	FH004	FB000020	12d9a40b86
f5e3de32a53ed25	FH004	FB000023	ad28f05869
ae5739b1f509bf3	FH004	FB000025	12d9a40b86
bf958687d39b2f0	FH001	FB000011	0f7553aa4e
7523364cd5dbaeb	FH004	FB000027	0f7553aa4e
86442fb9d651bbc	FH004	FB000031	0f7553aa4e
e139fcccce3d2df	FH004	FB000034	ad28f05869
c177641e0431cd1	FH009	FB000157	5bbae6a23e
000a6d38420b495	FH004	FB000038	9a75badfd8
58ae79039620d6a	FH004	FB000041	0f7553aa4e
a59ed0356596734	FH004	FB000042	0f7553aa4e
c474e763dbac45a	FH009	FB000130	ad28f05869
c5802e2c88c43ea	FH009	FB000150	5bbae6a23e
c5e2e92dc4f5a7a	FH002	FB000044	5bbae6a23e
c5e407478e75af2	FH009	FB000141	ad28f05869
c644e007a1f9ce3	FH002	FB000044	ad28f05869
c675f4b9f646ced	FH001	FB000011	5bbae6a23e
c8bc151f58be595	FH001	FB000181	ad28f05869
cbd81c69576ad00	FH001	FB000003	0f7553aa4e
cbf9dfe0e093901	FH001	FB000004	ad28f05869
cccf414161a17f2	FH009	FB000130	9a75badfd8
ccd64f385d34f9a	FH009	FB000146	ad28f05869
cd42fd200406dab	FH009	FB000157	0f7553aa4e
cd4bf08273330e4	FH009	FB000153	ad28f05869
ce02d75a0f5e1fb	FH001	FB000005	5bbae6a23e
cef110c54a6d58b	FH006	FB000067	12d9a40b86
d151860d69513a5	FH009	FB000141	5bbae6a23e
d4586c6b3db29af	FH009	FB000135	0f7553aa4e
d53224c4738e8f2	FH001	FB000181	0f7553aa4e
d57f2690241d7c0	FH001	FB000010	9a75badfd8
d5e1a81fc62b05b	FH001	FB000004	5bbae6a23e
d68d8502e97cff3	FH009	FB000151	5bbae6a23e
d92c0d4d2788d57	FH001	FB000181	12d9a40b86
db7ffebc647bd5a	FH009	FB000146	0f7553aa4e
dfbcfafe448eb4e	FH005	FB000051	0f7553aa4e
dc950d1dd2d0857	FH001	FB000002	5bbae6a23e
2bf6fa841bc3a3d	FH008	FB000115	9a75badfd8
4f6e6d1eed44b5c	FH008	FB000122	9a75badfd8
de65e078af2438f	FH001	FB000002	0f7553aa4e
27320191f6a8d6a	FH008	FB000124	0f7553aa4e
478a5723777824c	FH008	FB000126	12d9a40b86
03a6a6b1e7bed3b	FH008	FB000128	ad28f05869
1e86ac0fda308b8	FH008	FB000129	0f7553aa4e
47cbc1b724e2dac	FH008	FB000187	9a75badfd8
d12130d944e9215	FH005	FB000056	5bbae6a23e
3bbf75a932495ec	FH005	FB000063	5bbae6a23e
e58809cee489c01	FH009	FB000144	5bbae6a23e
e741097011ff78f	FH009	FB000144	0f7553aa4e
e8a063fee404984	FH001	FB000001	12d9a40b86
e9e71f3c1a8b836	FH009	FB000142	9a75badfd8
ea7a331843e7bd5	FH001	FB000181	9a75badfd8
ea967ea4e42bf33	FH009	FB000150	0f7553aa4e
1f491abfffc9b3e	FH004	FB000021	ad28f05869
d5b80fd6c9db52a	FH004	FB000023	12d9a40b86
ecbf4b9facb1eb3	FH001	FB000001	0f7553aa4e
9854fa0b72316c3	FH004	FB000026	ad28f05869
0892f1e5eba9551	FH004	FB000028	0f7553aa4e
bf622c862aafcf1	FH004	FB000032	ad28f05869
541a044cf397324	FH004	FB000034	9a75badfd8
6e2f8e8d136ae11	FH004	FB000038	12d9a40b86
efabc081e9e1300	FH003	FB000019	9a75badfd8
f0643276ee4c6c1	FH009	FB000148	0f7553aa4e
f0bd7e894d57452	FH009	FB000151	ad28f05869
eb46878edbc653a	FH004	FB000193	9a75badfd8
f5b31eb6a67011a	FH001	FB000001	5bbae6a23e
f5b8d0cb87ef1a9	FH009	FB000130	0f7553aa4e
f726ca4db91b1e6	FH009	FB000133	0f7553aa4e
f8eb80c6bf92f7a	FH009	FB000133	5bbae6a23e
fa67072a741d7a4	FH006	FB000064	12d9a40b86
fbb5ec572406e16	FH002	FB000182	0f7553aa4e
fc41d98fe819378	FH001	FB000005	0f7553aa4e
fcad730b1c912d3	FH001	FB000006	9a75badfd8
fef8d97293f8c5e	FH009	FB000144	ad28f05869
50531fb97631711	FH008	FB000116	9a75badfd8
a638ba232aad3ac	FH008	FB000123	ad28f05869
3c70e69af8edc93	FH008	FB000124	5bbae6a23e
292b62ea9e418dc	FH008	FB000126	0f7553aa4e
54f56ea1e8fa1e5	FH008	FB000128	12d9a40b86
302226180a9ddb3	FH008	FB000129	5bbae6a23e
c8fb7d9cfbd7098	FH008	FB000187	12d9a40b86
c790d0bdd81f576	FH005	FB000190	0f7553aa4e
2b25978249924e0	FH005	FB000057	5bbae6a23e
20eb8609cea30b7	FH005	FB000184	0f7553aa4e
22ddb0303925948	FH007	FB000068	ad28f05869
23468c07ed3eb42	FH007	FB000068	9a75badfd8
3f600efba547c9b	FH007	FB000068	12d9a40b86
8a25b34e62cb972	FH007	FB000068	0f7553aa4e
3db457a733c53f6	FH007	FB000068	5bbae6a23e
aa142e45d0f4837	FH007	FB000069	ad28f05869
7ef90b04486ecf5	FH007	FB000069	9a75badfd8
a115e0f87634637	FH007	FB000069	12d9a40b86
67c386956db304e	FH007	FB000069	0f7553aa4e
9006ded7d676f6a	FH007	FB000069	5bbae6a23e
4066d207f3ae2b6	FH007	FB000070	ad28f05869
9716a37b7f13945	FH007	FB000070	9a75badfd8
93a21a204deef20	FH007	FB000070	12d9a40b86
3fd0aa2583a03c7	FH007	FB000070	0f7553aa4e
dc6c0582d933feb	FH007	FB000070	5bbae6a23e
6407a879e750db9	FH007	FB000071	ad28f05869
e889e6db8c8c61d	FH007	FB000071	9a75badfd8
5ee86f67b57d353	FH007	FB000071	12d9a40b86
2355f9ccba28669	FH007	FB000071	0f7553aa4e
4f8c5436f7274ea	FH007	FB000071	5bbae6a23e
d73be2a0fe2ef60	FH007	FB000072	ad28f05869
6a2aa0479aec716	FH007	FB000072	9a75badfd8
fcfec51273424ca	FH007	FB000072	12d9a40b86
902e7475c33b5e9	FH007	FB000072	0f7553aa4e
cb3b2efd13b0c75	FH007	FB000072	5bbae6a23e
f6e88da473696f5	FH007	FB000073	ad28f05869
79394d1b4e608db	FH007	FB000073	9a75badfd8
401a3cb5c915a04	FH007	FB000073	12d9a40b86
a98d62b3a78647e	FH007	FB000073	0f7553aa4e
b72a5c078e78967	FH007	FB000073	5bbae6a23e
ab3d044fd704bc7	FH007	FB000074	ad28f05869
5c16cdd509a4905	FH007	FB000074	9a75badfd8
4565a9c2bfb1767	FH007	FB000074	12d9a40b86
af1c07486909791	FH007	FB000074	0f7553aa4e
c52110df5bd9d71	FH007	FB000074	5bbae6a23e
f178e62cbbaea02	FH007	FB000075	ad28f05869
a4f87793eabd67d	FH007	FB000075	9a75badfd8
31be93ba16ed7e3	FH007	FB000075	12d9a40b86
5a9a35a62c14757	FH007	FB000075	0f7553aa4e
b877b718b7941ec	FH007	FB000075	5bbae6a23e
76c2bc8c6d505b3	FH007	FB000076	ad28f05869
1cce0cfdcf9655b	FH007	FB000076	9a75badfd8
841f3a4cd562278	FH007	FB000076	12d9a40b86
68b82715e60dcc0	FH007	FB000076	0f7553aa4e
8c207a5f0a2770c	FH007	FB000076	5bbae6a23e
8a12c0fed089701	FH007	FB000077	ad28f05869
76d47b0ab1834a6	FH007	FB000077	9a75badfd8
db56ecadf0cd5cf	FH007	FB000077	12d9a40b86
600c2b64deab6dc	FH007	FB000077	0f7553aa4e
6ece3418cc5065c	FH007	FB000077	5bbae6a23e
50d10769110db5b	FH004	FB000021	9a75badfd8
bd1bf2111d3725e	FH004	FB000024	ad28f05869
097950f0633b47d	FH004	FB000026	9a75badfd8
4a7c87f03e6751f	FH004	FB000029	0f7553aa4e
a4d8b8cce0106cd	FH004	FB000032	9a75badfd8
5e81e67bf880cb1	FH004	FB000034	12d9a40b86
c7115efa3b343fa	FH004	FB000039	ad28f05869
6a178c5f1ca2578	FH004	FB000194	9a75badfd8
92f53b79559b663	FH007	FB000078	ad28f05869
de41e9cdd71b0b0	FH007	FB000078	9a75badfd8
fa2c48a0fb8944e	FH007	FB000078	12d9a40b86
9c81af870a7f74d	FH007	FB000078	0f7553aa4e
9d1f1379abd441d	FH007	FB000078	5bbae6a23e
e790144c70ce785	FH007	FB000079	ad28f05869
6f340add3ae2f37	FH007	FB000079	9a75badfd8
da7a79973fd4b83	FH007	FB000079	12d9a40b86
e92c21d758a0038	FH007	FB000079	0f7553aa4e
044dc29df5ebafb	FH007	FB000079	5bbae6a23e
f6ec2cbf77026ef	FH007	FB000080	ad28f05869
82d65ef5821d002	FH007	FB000080	9a75badfd8
ccd51e36e8fcac1	FH007	FB000080	12d9a40b86
18faa7cbaa0aab2	FH007	FB000080	0f7553aa4e
bf41d75a8a9dd94	FH007	FB000080	5bbae6a23e
87dd5bdec7afc44	FH007	FB000081	ad28f05869
a236e004841b35c	FH007	FB000081	9a75badfd8
375b6bfd1fba963	FH007	FB000081	12d9a40b86
38be82464c4ad45	FH007	FB000081	0f7553aa4e
4e49d4ecad2ac4b	FH007	FB000081	5bbae6a23e
bd849a99d787869	FH007	FB000082	ad28f05869
ffaa6fdd22233bc	FH007	FB000082	9a75badfd8
169cb4a51e2c5c9	FH007	FB000082	12d9a40b86
87fc9a27077811e	FH007	FB000082	0f7553aa4e
f97f7ed750b57e6	FH007	FB000082	5bbae6a23e
918b6aa094a2493	FH007	FB000083	ad28f05869
90cc79116fd9391	FH007	FB000083	9a75badfd8
cf609d26e6f5765	FH007	FB000083	12d9a40b86
9f16eff309203b8	FH007	FB000083	0f7553aa4e
80e806a54aabb99	FH007	FB000083	5bbae6a23e
5f408cccf5c90b4	FH007	FB000084	ad28f05869
feaca43f311669f	FH007	FB000084	9a75badfd8
ae2c0757979b300	FH007	FB000084	12d9a40b86
cd9d47e9fb0fef9	FH007	FB000084	0f7553aa4e
7a2d3a68b37d05f	FH007	FB000084	5bbae6a23e
dc5b3248a3fed9c	FH007	FB000085	ad28f05869
e45b810fc8cb32a	FH007	FB000085	9a75badfd8
5574091956693da	FH007	FB000085	12d9a40b86
4eaf89451bed2fa	FH007	FB000085	0f7553aa4e
dd1f17a203565d9	FH007	FB000085	5bbae6a23e
7b43177fa439470	FH007	FB000086	ad28f05869
70a10e057dcc7d4	FH007	FB000086	9a75badfd8
e9723e940d422b7	FH007	FB000086	12d9a40b86
28c4dee96154736	FH007	FB000086	0f7553aa4e
52a0fdefd6e2bd4	FH007	FB000086	5bbae6a23e
7f03ca475d4eaac	FH007	FB000087	ad28f05869
2785fd85efe1b5b	FH007	FB000087	9a75badfd8
f3cd681882a21a0	FH007	FB000087	12d9a40b86
3b140bdea5048d7	FH007	FB000087	0f7553aa4e
13a467199659a84	FH007	FB000087	5bbae6a23e
d17c553175bdc5c	FH007	FB000088	ad28f05869
fc295a8d227c006	FH007	FB000088	9a75badfd8
444a034c9d21397	FH007	FB000088	12d9a40b86
713c2c249b1e1c5	FH007	FB000088	0f7553aa4e
1dc29d76c25eb1b	FH007	FB000088	5bbae6a23e
8e9ff61ef853b6d	FH007	FB000089	ad28f05869
4092e038b51aeeb	FH007	FB000089	9a75badfd8
d538c88173d7e74	FH007	FB000089	12d9a40b86
7e053faa4684d48	FH007	FB000089	0f7553aa4e
8ab9ac48ef8fe0e	FH007	FB000089	5bbae6a23e
936e5ba47581710	FH007	FB000090	ad28f05869
138e7b9974af8eb	FH007	FB000090	9a75badfd8
165e304528a72db	FH007	FB000090	12d9a40b86
57250ba96525c63	FH007	FB000090	0f7553aa4e
2d2d2d27e073d37	FH007	FB000090	5bbae6a23e
0f9dcf5d4313775	FH007	FB000091	ad28f05869
59e6642ee2b5232	FH007	FB000091	9a75badfd8
d80a5bdf1ae0b51	FH007	FB000091	12d9a40b86
7d333e1b7f3654e	FH007	FB000091	0f7553aa4e
06488aab1817c8d	FH007	FB000091	5bbae6a23e
02af685bbbd596e	FH007	FB000092	ad28f05869
aaca02beff61964	FH007	FB000092	9a75badfd8
59188f87dcb4c82	FH007	FB000092	12d9a40b86
1eec0fcb8d5b276	FH007	FB000092	0f7553aa4e
143698d1a5f7a35	FH007	FB000092	5bbae6a23e
c64280a8cd7d0ae	FH007	FB000093	ad28f05869
4365c1935d7311f	FH007	FB000093	9a75badfd8
bbaade325827c8b	FH007	FB000093	12d9a40b86
df2aaa6a6c55667	FH007	FB000093	0f7553aa4e
824b6d06c52d1d3	FH007	FB000093	5bbae6a23e
e8348fa415a7815	FH007	FB000094	ad28f05869
a541f3711728206	FH007	FB000094	9a75badfd8
36b4ded83cfb44d	FH007	FB000094	12d9a40b86
bb91d60217469a9	FH007	FB000094	0f7553aa4e
743b8d15bd66575	FH007	FB000094	5bbae6a23e
5be14d3920fb783	FH007	FB000095	ad28f05869
e7281ebe0db9b31	FH007	FB000095	9a75badfd8
65bbe248e416bda	FH007	FB000095	12d9a40b86
388f614b0fad7f4	FH007	FB000095	0f7553aa4e
4acda866c65a660	FH007	FB000095	5bbae6a23e
a390b723778e90e	FH007	FB000096	ad28f05869
0952b45dd1a0ae9	FH007	FB000096	9a75badfd8
ab0cfa7249b883b	FH007	FB000096	12d9a40b86
5c1947a8e01d4bb	FH007	FB000096	0f7553aa4e
a87520d632f8bb6	FH007	FB000096	5bbae6a23e
15e57a2a4f4bf49	FH007	FB000097	ad28f05869
4a20d190130fcc0	FH007	FB000097	9a75badfd8
319823871f3145b	FH007	FB000097	12d9a40b86
3be29a955ee5efe	FH007	FB000097	0f7553aa4e
08200f1044bdf22	FH007	FB000097	5bbae6a23e
96ff22b44c5f7e2	FH007	FB000098	ad28f05869
7c84d06a7671f67	FH007	FB000098	9a75badfd8
e40154326d8f8d9	FH007	FB000098	12d9a40b86
05ece9b2a21d190	FH007	FB000098	0f7553aa4e
fcda5b3b6449cc0	FH007	FB000098	5bbae6a23e
d13738dc3213fa5	FH007	FB000099	ad28f05869
db708bbd15fb6a9	FH007	FB000099	9a75badfd8
fa5a48b8e5d46f0	FH007	FB000099	12d9a40b86
44f8130e8baf802	FH007	FB000099	0f7553aa4e
f0fc37d11b0e680	FH007	FB000099	5bbae6a23e
720d670171efdb8	FH007	FB000100	ad28f05869
56ca60c154b4a9e	FH007	FB000100	9a75badfd8
db358f2a9fde9d8	FH007	FB000100	12d9a40b86
8902a0931b8f764	FH007	FB000100	0f7553aa4e
372209efd30226a	FH007	FB000100	5bbae6a23e
d32a40b143ce134	FH007	FB000101	ad28f05869
b894e4adf7b1e90	FH007	FB000101	9a75badfd8
34699dabd12d80b	FH007	FB000101	12d9a40b86
c8e1f5598ad6d25	FH007	FB000101	0f7553aa4e
dd9cccae94139ad	FH007	FB000101	5bbae6a23e
ab200e073f72060	FH007	FB000102	ad28f05869
a8424f4de36db77	FH007	FB000102	9a75badfd8
b765d66d63fb336	FH007	FB000102	12d9a40b86
a59445750ab3310	FH007	FB000102	0f7553aa4e
63e9d00f9f95662	FH007	FB000102	5bbae6a23e
2811bc3522b9135	FH007	FB000103	ad28f05869
6df94f86831fa96	FH007	FB000103	9a75badfd8
381ad1e287b7013	FH007	FB000103	12d9a40b86
64ca2d5701ac277	FH007	FB000103	0f7553aa4e
e12449ce2fb407a	FH007	FB000103	5bbae6a23e
738f473e5de100d	FH007	FB000104	ad28f05869
35c473810659553	FH007	FB000104	9a75badfd8
b77bb2fbe0015e0	FH007	FB000104	12d9a40b86
dc2e6f307ea7572	FH007	FB000104	0f7553aa4e
382cddd07f8ca89	FH007	FB000104	5bbae6a23e
14f41ae99d31dc5	FH007	FB000192	ad28f05869
7551a9a76550980	FH007	FB000192	9a75badfd8
a1971c824199d1e	FH007	FB000192	12d9a40b86
7a3c7c4210b8fe5	FH007	FB000192	0f7553aa4e
1022605eee7585c	FH007	FB000192	5bbae6a23e
864b12437ee0034	FH007	FB000105	ad28f05869
de1725a47bd7ce4	FH007	FB000105	9a75badfd8
97f614f8a292fbe	FH007	FB000105	12d9a40b86
c827006de4a2ef8	FH007	FB000105	0f7553aa4e
f706c011f224398	FH007	FB000105	5bbae6a23e
864026ee9e8eab6	FH007	FB000106	ad28f05869
80f34388db320d4	FH007	FB000106	9a75badfd8
337ec1a2ea14480	FH007	FB000106	12d9a40b86
83d085a3d77a056	FH007	FB000106	0f7553aa4e
d268d153f7d0e0d	FH007	FB000106	5bbae6a23e
ad8097c46abdbff	FH007	FB000107	ad28f05869
cc4430c7a7fbc46	FH007	FB000107	9a75badfd8
7a850f6b0ad3cb9	FH007	FB000107	12d9a40b86
8959f8634d9e0c7	FH007	FB000107	0f7553aa4e
df0328f8b4c231d	FH007	FB000107	5bbae6a23e
63db1d72e06790e	FH007	FB000108	ad28f05869
d62eb1af0a32589	FH007	FB000108	9a75badfd8
f23c515cc1a6a2e	FH007	FB000108	12d9a40b86
805a5fa261166cf	FH007	FB000108	0f7553aa4e
923e7fcfd4162ff	FH007	FB000108	5bbae6a23e
a3360140212be9e	FH007	FB000109	ad28f05869
ee2c1470db93e19	FH007	FB000109	9a75badfd8
e9b6ff8f71266c9	FH007	FB000109	12d9a40b86
de58cf313ac6c85	FH007	FB000109	0f7553aa4e
cb7ea28e76e01d7	FH007	FB000109	5bbae6a23e
53f9fd66d4ab27f	FH007	FB000189	ad28f05869
227ff4c8dab7093	FH007	FB000189	9a75badfd8
ccc81ee8e69dd51	FH007	FB000189	12d9a40b86
ffeab32e752bc32	FH007	FB000189	0f7553aa4e
8bb55a5902230ab	FH007	FB000189	5bbae6a23e
0b8694d6f37c42f	FH007	FB000110	ad28f05869
adf0d48246ad057	FH007	FB000110	9a75badfd8
85dbfc7c432a4a4	FH007	FB000110	12d9a40b86
322eae25f58cedb	FH007	FB000110	0f7553aa4e
4c178c2bb5e245d	FH007	FB000110	5bbae6a23e
478f941fe6873c9	FH008	FB000117	9a75badfd8
c523dae415a2680	FH008	FB000123	12d9a40b86
96eb06a3ac5724f	FH008	FB000125	ad28f05869
3a6752570a4b69e	FH008	FB000126	5bbae6a23e
5373407ad1b2dd6	FH008	FB000128	0f7553aa4e
2347f937ef0776c	FH008	FB000188	ad28f05869
63b9ef06051a64f	FH008	FB000187	0f7553aa4e
5f0aed32d0da810	FH005	FB000191	0f7553aa4e
ef341fe4f07e4ab	FH005	FB000058	5bbae6a23e
d4b76142da4cd51	FH005	FB000185	5bbae6a23e
bce18e1d6df283b	FH004	FB000021	12d9a40b86
56113695696832e	FH004	FB000024	9a75badfd8
477f977ea561c1d	FH004	FB000026	12d9a40b86
7b240adfd3372ae	FH004	FB000030	0f7553aa4e
f3d27f806bcbf7f	FH004	FB000032	12d9a40b86
a19ca51cb658573	FH004	FB000035	0f7553aa4e
c8f21a6482aa6d0	FH004	FB000039	12d9a40b86
3bb190d04eaec42	FH004	FB000195	9a75badfd8
\.


--
-- Data for Name: d_permissions; Type: TABLE DATA; Schema: sika; Owner: inalum
--

COPY sika.d_permissions (id_permission, id_role, id_menu, id_action) FROM stdin;
e800121a8643d87	RS004	MN000001	zfoaf1euM9
1039ec0dec785b0	RS004	MN000004	zfoaf1euM9
16b23e4b5845921	RS004	MN000005	vpdfpkneUv
1617d271dcb7b8f	RS004	MN000006	zfoaf1euM9
6a5b8322e6327a0	RS004	MN000006	i798aWl65T
55a52e3702c5223	RS004	MN000007	NjzurCwdyf
1a1f90080b6394b	RS004	MN000007	1AqCrdhIr9
4f734e85fe4be83	RS004	MN000008	vpdfpkneUv
5a0e1da3312f9ff	RS004	MN000009	zfoaf1euM9
c1f30ece7cf6e9f	RS004	MN000009	i798aWl65T
81958df1fdce281	RS003	MN000001	zfoaf1euM9
13cf629eab19ab9	RS003	MN000004	zfoaf1euM9
d6a2f53ae005f2f	RS003	MN000005	vpdfpkneUv
d0c47c046085d21	RS003	MN000006	zfoaf1euM9
c1b6b0baf9f9c55	RS003	MN000006	i798aWl65T
ec03a66f3ea2664	RS003	MN000007	NjzurCwdyf
a7756fa07910459	RS003	MN000007	1AqCrdhIr9
4a9a443975327a0	RS003	MN000008	vpdfpkneUv
426a85fb6e942db	RS003	MN000009	zfoaf1euM9
fd5ebf2d422611c	RS003	MN000009	i798aWl65T
b811c44d7b4edfd	RS004	MN000002	zfoaf1euM9
d824bda87f80129	RS004	MN000005	zfoaf1euM9
2700c7c041960b7	RS004	MN000005	i798aWl65T
642895cf13a45c1	RS004	MN000006	NjzurCwdyf
d9ec2455feeccb2	RS004	MN000006	1AqCrdhIr9
e6450af39770f59	RS004	MN000007	vpdfpkneUv
388c7f34a361f0c	RS004	MN000008	zfoaf1euM9
3e872ede7c4bc4b	RS004	MN000008	i798aWl65T
7ee0501db62aa13	RS004	MN000009	NjzurCwdyf
70a17e0a2878563	RS004	MN000009	1AqCrdhIr9
3d882f0115236a0	RS002	MN000001	zfoaf1euM9
31b15cc2ad99bb3	RS002	MN000002	zfoaf1euM9
b57632c5e2b234f	RS002	MN000003	zfoaf1euM9
d445d2faa20391a	RS002	MN000003	1AqCrdhIr9
0e8ea164363e913	RS002	MN000033	1AqCrdhIr9
ddf2163af3dfe7e	RS002	MN000004	zfoaf1euM9
92377f8b1f1bf62	RS002	MN000005	zfoaf1euM9
b397318a55a3ad2	RS002	MN000005	58yFrtOtY7
8b86a0367feaba5	RS002	MN000005	1AqCrdhIr9
b5bf8c318dbf710	RS002	MN000006	zfoaf1euM9
fe1f4654f1844ee	RS002	MN000006	58yFrtOtY7
5476ee722e0ee69	RS002	MN000006	1AqCrdhIr9
5ebe3a52e319617	RS002	MN000007	zfoaf1euM9
5794e8ab088349d	RS002	MN000007	58yFrtOtY7
6eabc0468147dbf	RS002	MN000007	1AqCrdhIr9
dde0ec4d1d9df57	RS002	MN000008	zfoaf1euM9
8c20a2dd6c288a4	RS002	MN000008	58yFrtOtY7
6eef2d4dd06e58a	RS002	MN000008	1AqCrdhIr9
e96039d78e41e4c	RS002	MN000009	zfoaf1euM9
d94432988a992c6	RS002	MN000009	58yFrtOtY7
a8a72ceb83802bc	RS002	MN000009	1AqCrdhIr9
39cfc29463e9696	RS002	MN000010	zfoaf1euM9
a9c48d2e1f876e3	RS002	MN000015	zfoaf1euM9
09124f9f804c204	RS002	MN000015	NjzurCwdyf
1a8adc89a9f744b	RS002	MN000015	vpdfpkneUv
cafecfbc9346593	RS002	MN000027	zfoaf1euM9
1ed381a3fa533ac	RS002	MN000027	NjzurCwdyf
f3f73e127642d6b	RS002	MN000028	zfoaf1euM9
9387a03c4fbefd2	RS002	MN000028	NjzurCwdyf
eb7ea11a35130e3	RS003	MN000002	zfoaf1euM9
6207248f6cb81e6	RS003	MN000005	zfoaf1euM9
52f68b4b3e95178	RS003	MN000005	i798aWl65T
f7e936e94aecd6e	RS003	MN000006	NjzurCwdyf
15350628f23abf0	RS003	MN000006	1AqCrdhIr9
4457e29ac380c19	RS003	MN000007	vpdfpkneUv
55d45ce9b2eea86	RS003	MN000008	zfoaf1euM9
5dd676a45f7c9a6	RS003	MN000008	i798aWl65T
006667d2a1179ce	RS003	MN000009	NjzurCwdyf
e6196d16da33c58	RS003	MN000009	1AqCrdhIr9
ab44272a9aab122	RS004	MN000003	zfoaf1euM9
3fca1c5af64ef02	RS004	MN000005	NjzurCwdyf
79bc0de3e8ac42e	RS004	MN000005	1AqCrdhIr9
cc3db07588fcf47	RS004	MN000006	vpdfpkneUv
9c64d0980577c90	RS004	MN000007	zfoaf1euM9
4a29d46d6987024	RS004	MN000007	i798aWl65T
0acfc5d37c2c145	RS004	MN000008	NjzurCwdyf
b04bb7e0bcc254a	RS004	MN000008	1AqCrdhIr9
c031545e0a3ba8a	RS004	MN000009	vpdfpkneUv
45b408cdcdc16a2	RS006	MN000001	zfoaf1euM9
3121976b1d3d022	RS005	MN000001	zfoaf1euM9
809c615938380be	RS005	MN000002	zfoaf1euM9
b7c515dee380ac3	RS005	MN000003	zfoaf1euM9
debb257f18bb93b	RS005	MN000004	zfoaf1euM9
ab12a3d1d1859e8	RS005	MN000005	zfoaf1euM9
9a4a0138faba032	RS005	MN000005	58yFrtOtY7
95ed08108e69fbc	RS005	MN000006	zfoaf1euM9
53f588b1898a90e	RS005	MN000006	58yFrtOtY7
7d970bcc8e4b539	RS005	MN000007	zfoaf1euM9
86609a2de243efd	RS005	MN000007	58yFrtOtY7
16b6d316453498a	RS005	MN000008	zfoaf1euM9
75395b6047efc32	RS005	MN000008	58yFrtOtY7
00b15c0bba7f264	RS005	MN000009	zfoaf1euM9
03addc7af5ab62e	RS005	MN000009	58yFrtOtY7
26cd0153aad2895	RS006	MN000002	zfoaf1euM9
42420de0590c1a1	RS006	MN000003	zfoaf1euM9
53f59988e480f64	RS006	MN000004	zfoaf1euM9
33010af69a2b780	RS006	MN000005	zfoaf1euM9
e747006bfd0936a	RS006	MN000005	58yFrtOtY7
84f0d787eb94349	RS006	MN000006	zfoaf1euM9
ed916a29c8fda91	RS006	MN000006	58yFrtOtY7
588c3a0e017d197	RS006	MN000007	zfoaf1euM9
2e1a2c33010bf22	RS006	MN000007	58yFrtOtY7
f467738c69c6280	RS006	MN000008	zfoaf1euM9
3ef824523735b5e	RS006	MN000008	58yFrtOtY7
ebe9402ccb799f3	RS006	MN000009	zfoaf1euM9
543d3974b3ce628	RS006	MN000009	58yFrtOtY7
0f864519f7bc14f	RS003	MN000003	zfoaf1euM9
44df007370ecbc9	RS003	MN000005	NjzurCwdyf
7f81d724fdf6499	RS003	MN000005	1AqCrdhIr9
2dc38a26e292b80	RS003	MN000006	vpdfpkneUv
2daca4f74f98c29	RS003	MN000007	zfoaf1euM9
16b245ca7c0b4dd	RS003	MN000007	i798aWl65T
c55207c68c6bf64	RS003	MN000008	NjzurCwdyf
ab8b60cc2197237	RS003	MN000008	1AqCrdhIr9
2fb5f1e6ee4cb2d	RS003	MN000009	vpdfpkneUv
739fbefa1163aa7	RS001	MN000001	zfoaf1euM9
c98e1d8e6dbbd7f	RS001	MN000002	zfoaf1euM9
fef0f971e84e64e	RS001	MN000003	zfoaf1euM9
2c18d2980985fc1	RS001	MN000003	1AqCrdhIr9
3c090412bfb84bf	RS001	MN000033	zfoaf1euM9
89f0d5519139e73	RS001	MN000033	1AqCrdhIr9
fe780d1114e03af	RS001	MN000004	zfoaf1euM9
45bbf04139394a2	RS001	MN000005	zfoaf1euM9
f582c52ad3bc3d8	RS001	MN000005	58yFrtOtY7
05126abf7f51ad8	RS001	MN000005	NjzurCwdyf
5955eb8fc4a5eb0	RS001	MN000005	vpdfpkneUv
e998a45e88ff660	RS001	MN000005	i798aWl65T
24b4b0a72cb87a4	RS001	MN000005	1AqCrdhIr9
2f2d5cc372b9d1c	RS001	MN000006	zfoaf1euM9
a757ba64af960a3	RS001	MN000006	58yFrtOtY7
66b2e4b0a7624e8	RS001	MN000006	NjzurCwdyf
0ea99182be09dd4	RS001	MN000006	vpdfpkneUv
300e5cc28db9c09	RS001	MN000006	i798aWl65T
63d2298d900eaab	RS001	MN000006	1AqCrdhIr9
4383ed9797d3ad4	RS001	MN000007	zfoaf1euM9
bc2e46efd3d33dc	RS001	MN000007	58yFrtOtY7
f65fb09883e9dc7	RS001	MN000007	NjzurCwdyf
fe5c04dd8c85057	RS001	MN000007	vpdfpkneUv
8a1bab425de6816	RS001	MN000007	i798aWl65T
209c35115f9aca2	RS001	MN000007	1AqCrdhIr9
1282ad6216fd514	RS001	MN000008	zfoaf1euM9
98f3ce1bfd13b55	RS001	MN000008	58yFrtOtY7
56dba47ea38ca21	RS001	MN000008	NjzurCwdyf
34be228783a02ca	RS001	MN000008	vpdfpkneUv
aeb927328937b11	RS001	MN000008	i798aWl65T
d60426ecb928691	RS001	MN000008	1AqCrdhIr9
3009c947dcd5d41	RS001	MN000009	zfoaf1euM9
c326c0757ad5963	RS001	MN000009	58yFrtOtY7
7ac2926671894c2	RS001	MN000009	NjzurCwdyf
5e185f5daa9e7d9	RS001	MN000009	vpdfpkneUv
d9eb4202f26b114	RS001	MN000009	i798aWl65T
8ecbf4265b6ca86	RS001	MN000009	1AqCrdhIr9
87f02743080e3ad	RS001	MN000010	zfoaf1euM9
d4a7145d313905a	RS001	MN000015	zfoaf1euM9
72786d8a7988274	RS001	MN000015	NjzurCwdyf
8e309dfaa169dc2	RS001	MN000015	vpdfpkneUv
58588b7b25b5a41	RS001	MN000015	i798aWl65T
26b66cd76aa7b82	RS001	MN000014	zfoaf1euM9
620b16fbc5c9f82	RS001	MN000016	zfoaf1euM9
ea22040658ae36b	RS001	MN000016	NjzurCwdyf
d51c87be7b0a46d	RS001	MN000016	vpdfpkneUv
7227128c246210b	RS001	MN000016	i798aWl65T
dc772ffdfd04833	RS001	MN000017	zfoaf1euM9
a4e2d1e65987beb	RS001	MN000017	NjzurCwdyf
a7f092f33cefd28	RS001	MN000017	vpdfpkneUv
b69738b74dc5711	RS001	MN000017	i798aWl65T
812e4ed1beb5e34	RS001	MN000018	zfoaf1euM9
c6f735977b8d381	RS001	MN000011	zfoaf1euM9
4431500080958eb	RS001	MN000012	zfoaf1euM9
e95554c1705f778	RS001	MN000012	NjzurCwdyf
d582df02cbddd1d	RS001	MN000012	vpdfpkneUv
9f8f978b844e5ad	RS001	MN000012	i798aWl65T
59f960f28efb885	RS001	MN000013	zfoaf1euM9
7384d6cbbac4676	RS001	MN000013	NjzurCwdyf
dfb2286d16247cf	RS001	MN000013	vpdfpkneUv
8f71c29b7820ec4	RS001	MN000013	i798aWl65T
0a042f056ce6e18	RS001	MN000027	zfoaf1euM9
295efb4579fea48	RS001	MN000027	NjzurCwdyf
e6ff34ec40cfa67	RS001	MN000027	vpdfpkneUv
31db9189899f7d1	RS001	MN000027	i798aWl65T
b29793c11b28339	RS001	MN000028	zfoaf1euM9
b6bb5275313734b	RS001	MN000028	NjzurCwdyf
6c313e2bea70ea9	RS001	MN000028	vpdfpkneUv
99e85888a79a3a4	RS001	MN000028	i798aWl65T
cd4345b5cebce18	RS001	MN000019	zfoaf1euM9
d012edbb7341f9f	RS001	MN000019	NjzurCwdyf
9bd15551a6a6fea	RS001	MN000019	vpdfpkneUv
4dd963d36aa8719	RS001	MN000019	i798aWl65T
0894f6b18bb3020	RS001	MN000021	zfoaf1euM9
990aa65058c95eb	RS001	MN000021	NjzurCwdyf
3080e4e1d2fa2f8	RS001	MN000021	vpdfpkneUv
41848f48a7b2b61	RS001	MN000021	i798aWl65T
291b32868ebb7a1	RS001	MN000022	zfoaf1euM9
b194e65da4e7603	RS001	MN000022	NjzurCwdyf
20132a27b61fab7	RS001	MN000022	vpdfpkneUv
8f538d51ec278ae	RS001	MN000022	i798aWl65T
81265e091b814c6	RS001	MN000023	zfoaf1euM9
4f0a6f6d32050f4	RS001	MN000023	NjzurCwdyf
9fc40c5630431f5	RS001	MN000023	vpdfpkneUv
7888d53ebbdf8be	RS001	MN000023	i798aWl65T
3e45cb9c03100d5	RS001	MN000024	zfoaf1euM9
c77befe47480a5f	RS001	MN000024	NjzurCwdyf
6c8557d91f031c3	RS001	MN000024	vpdfpkneUv
b147b32fdd2e429	RS001	MN000024	i798aWl65T
\.


--
-- Data for Name: d_permissions_private; Type: TABLE DATA; Schema: sika; Owner: inalum
--

COPY sika.d_permissions_private (id_permission, id_user, id_menu, id_action) FROM stdin;
\.


--
-- Data for Name: d_relasi_izin_kerja; Type: TABLE DATA; Schema: sika; Owner: inalum
--

COPY sika.d_relasi_izin_kerja (id_relasi_izin_kerja, id_izin_kerja, id_form_body, isian, other, files) FROM stdin;
9f7dd64b6e66484	dda352919cf81b9	FB000131	true		
f5497abba967d66	dda352919cf81b9	FB000003	asdf 2		
1c04606afaa1565	af8b00d596b2ead	FB000085	true		
962d81a1d50ea0a	c91d2c29b9f194e	FB000027	true		
3b9634c7193f28a	c91d2c29b9f194e	FB000090	true		
e1176bc79c08326	c91d2c29b9f194e	FB000137	true		
3b27eb5072ac84b	1b665affe683f4b	FB000131	true		
feb745f15bb5513	1b665affe683f4b	FB000144	true		
3d4c2fcd2a0eae2	1b665affe683f4b	FB000157	true		
02229d3c55bc4f5	1b665affe683f4b	FB000009	234		
2e7064914d7f927	6f7d23e0b70ae23	FB000137	true		
332f0217a5fc65f	6f7d23e0b70ae23	FB000151	true		
25ef1158cf5855b	6f7d23e0b70ae23	FB000003	asdf		
f71a4095128f866	c91d2c29b9f194e	FB000003	test		
29bb2f660325f22	f82dae290502e70	FB000131	true		
f6b808fbe21a5b7	69a7b900708685c	FB000146	true		
2a5989ba4b51b1a	ee5f00d62b72cc4	FB000135	true		
9bbb4a5976aa824	ee5f00d62b72cc4	FB000004	asdf		
b536e8d1af2f6e9	f82dae290502e70	FB000155	true		
b1f4a927920e61e	f82dae290502e70	FB000013	asdf		
197dcc9cc704201	6fdb8baf0bac546	FB000031	true		
f1730b82ef82c15	6fdb8baf0bac546	FB000112	true		
cc0502f93cf0830	8b6609172fd12fc	FB000024	true		
8b8a259f60198b6	8b6609172fd12fc	FB000076	true		
3a8138a042c13bd	8b6609172fd12fc	FB000126	true		
eab395d355b0954	6fdb8baf0bac546	FB000146	true		
d75c13c0c318271	6fdb8baf0bac546	FB000009	mana p		
577dd668a5d03f4	6fdb8baf0bac546	FB000019	11:00		
4449d65bcf12c15	6e798c129a380f0	FB000075	true		
3560e8c2ed99637	6e798c129a380f0	FB000146	true		
cf7dd4434dd7e37	6e798c129a380f0	FB000009	qwrgsef		
9175553766f125f	6e798c129a380f0	FB000019	10:00		
5c1972ef9a7f891	7cb96acccc53861	FB000087	true		
e6be0ceb343a4c3	7cb96acccc53861	FB000142	true		
f5676a4e2935a89	7cb96acccc53861	FB000006	asdfasdf		
80226bb28c5db6f	7cb96acccc53861	FB000017	fsdfsdf		
bf6576c5abf1cdc	d7c54a5b9abad62	FB000146	true		
1133c08b7f0ceaf	1c84142c16881cc	FB000036	true		
e40ad6782c28c78	1c84142c16881cc	FB000074	true		
bb7ee904f6498c5	1c84142c16881cc	FB000107	true		
4f0bd34485797f0	1c84142c16881cc	FB000139	true		
f3dbbbc0b7efece	1c84142c16881cc	FB000153	true		
fd79305b6163a10	1c84142c16881cc	FB000004	asdfasdf		
764a3c11e143d07	1c84142c16881cc	FB000044	asdfa||asdf d||asdfas	2342||234||234	
b2574d2ced84296	eb63f2951d3241c	FB000127	true		
09ff5d16393968c	eb63f2951d3241c	FB000148	true		
d2eba7b101d68c2	9462387ae8d3621	FB000144	true		
58ca4fa47efd5ec	9462387ae8d3621	FB000011	123		
e07caf6e9637c61	17eaf519e90a861	FB000144	true		
8d68ab0e2bd59b1	17eaf519e90a861	FB000159	true		
c689b409b276ef1	17eaf519e90a861	FB000011	123		
52236c6a58ce7e7	eb63f2951d3241c	FB000009	asdfas		
4fd12b3c6a2e11b	0b2423cc8bd003e	FB000102	true		
ec3de1ed8f267b4	0b2423cc8bd003e	FB000146	true		
dbc37c1d228f555	0b2423cc8bd003e	FB000005	-		
a9a8790cfaf3814	d18e67b456f8250	FB000073	true		
8f2dbaebc902a58	d18e67b456f8250	FB000131	true		
66cafcc18b0834e	d18e67b456f8250	FB000146	true		
c71d5f8bb48b3cd	d18e67b456f8250	FB000159	true		
22d43cfc939a7b9	d18e67b456f8250	FB000010	Pengawas		
1cd8fe5de0ea0d7	d18e67b456f8250	FB000046	alat berat	8	
24b9e41382cc0f9	cb93caf3102bb4e	FB000024	true		
41f9bf3fbe1fe35	2fe1398eace89cf	FB000025	true		
31aa88948470c25	56e801ace315645	FB000131	true		
0579a72c3afb5f2	56e801ace315645	FB000144	true		
b9f37fbccf79a13	56e801ace315645	FB000157	true		
8fb9784f6727fbf	56e801ace315645	FB000010	134		
5ac19853473f43a	56e801ace315645	FB000017	asdf		
9e3ef771afb7204	38e8f73d4bb470e	FB000096	true		
5f853d50210686c	38e8f73d4bb470e	FB000142	true		
230bef5f631888c	38e8f73d4bb470e	FB000155	true		
fda8bde3db416e6	38e8f73d4bb470e	FB000009	Inalum		
6cca2c689dcec5a	38e8f73d4bb470e	FB000015	aman		
c445fa626f723d3	79b3763ea9e6b7b	FB000038	true		
6e4447f7f42fb6e	3aa7a14111037bd	FB000027	true		
1775d3d90f3ca4c	3aa7a14111037bd	FB000123	true		
2646c7d7fb60910	3aa7a14111037bd	FB000133	true		
389f90ed27a054a	3aa7a14111037bd	FB000144	true		
288851ebafcd217	3aa7a14111037bd	FB000155	true		
0cbb8295975c577	3aa7a14111037bd	FB000004	Gedung Baru Inalum		
d1af19c19d6d765	3aa7a14111037bd	FB000043	Tangga	1	
974d03f14789de8	79b3763ea9e6b7b	FB000071	true		
c95fb9cb6528932	79b3763ea9e6b7b	FB000085	true		
92659cb60ff6d62	79b3763ea9e6b7b	FB000105	Ada yang pegang tangga		
4345d5048ec6bdd	79b3763ea9e6b7b	FB000131	true		
7de058177a664ff	79b3763ea9e6b7b	FB000135	true		
3488f15aec9f768	79b3763ea9e6b7b	FB000139	true		
fee353830ec6af8	79b3763ea9e6b7b	FB000144	true		
5f400a9a0076c03	79b3763ea9e6b7b	FB000148	true		
2901b77d55bfcaf	79b3763ea9e6b7b	FB000153	true		
a6fe1fbf868ab1a	79b3763ea9e6b7b	FB000157	true		
6ef46881ee60bb1	79b3763ea9e6b7b	FB000001	Memasang AC di Server Ruang SIT		
5354a780d6d2251	79b3763ea9e6b7b	FB000007	Pasang AC		
51f78abd0334805	79b3763ea9e6b7b	FB000010	Nama Pengawas Pekerjaan		
697ba48b04fe047	79b3763ea9e6b7b	FB000012	100		
ad00d562106851d	79b3763ea9e6b7b	FB000014	0		
0e424e013466a44	79b3763ea9e6b7b	FB000015	-		
0662a375d4d2d28	79b3763ea9e6b7b	FB000017	Nama Authorized Gas Tester		
47069d8bb5282fc	79b3763ea9e6b7b	FB000018	2023-01-14		
b37f7a87b3e55fa	79b3763ea9e6b7b	FB000019	15:00		
07d37b62f62ca21	dda352919cf81b9	FB000133	true		
e9f6a6977f1afa3	dda352919cf81b9	FB000004	asdf 3		
6b5a7bbbd51bde6	af8b00d596b2ead	FB000131	true		
0f990ed92a84f85	af8b00d596b2ead	FB000001	Manjat tower		
01fcaa3cb882978	cc5ef893d60564e	FB000142	true		
bc87093baf3f570	cc5ef893d60564e	FB000003	asd		
0cd8e03bd56aa23	c91d2c29b9f194e	FB000028	true		
420150999d88ff3	c91d2c29b9f194e	FB000093	asdfasd		
4760a6eb5d60b54	c91d2c29b9f194e	FB000139	true		
ed05143a27df9c4	c91d2c29b9f194e	FB000004	test		
355b2370cb82f73	f82dae290502e70	FB000133	true		
018c877b48ed3dc	f82dae290502e70	FB000157	true		
e30696e667961b9	f82dae290502e70	FB000014	asdf		
7e3a9a57b582cd1	6fdb8baf0bac546	FB000032	true		
dd1ddaa7711812b	6fdb8baf0bac546	FB000113	true		
09618ee6ad907c8	6fdb8baf0bac546	FB000148	true		
9c11c3783d65e2e	6fdb8baf0bac546	FB000010	nama pengawas		
ed176516690abc5	1b665affe683f4b	FB000133	true		
2a4d9ad8e86377d	1b665affe683f4b	FB000146	true		
7492f78b86c9417	1b665affe683f4b	FB000159	true		
177dbb5a84f9388	1b665affe683f4b	FB000010	234		
fe2aecad46d3257	6f7d23e0b70ae23	FB000139	true		
c8b2c4463879ae7	6f7d23e0b70ae23	FB000153	true		
1d8316f0aa4c222	6f7d23e0b70ae23	FB000004	asdf		
e52d7fea6992dee	1db69953125e16b	FB000139	true		
8c24c08685c849b	45e1a224d677912	FB000020	true		
dc2bf3ee583c223	45e1a224d677912	FB000075	true		
dffd555e3b1d5b8	45e1a224d677912	FB000128	true		
8ee1448cec32502	45e1a224d677912	FB000144	true		
f72fd05626193e0	45e1a224d677912	FB000003	asdf		
794b989194d44de	d7c54a5b9abad62	FB000148	true		
dcce0bd871a434d	9462387ae8d3621	FB000146	true		
5d4ded7b321ddf3	9462387ae8d3621	FB000043	asdf	134	
b8b137e2c5e99be	0b2423cc8bd003e	FB000110	test panjang hahaha		
321b5d6146f2204	0b2423cc8bd003e	FB000148	true		
53c5a32fb585175	0b2423cc8bd003e	FB000009	PT. Berca Hardayaperkasa		
94705c012e65be5	cb93caf3102bb4e	FB000025	true		
21610d282956ff2	cb93caf3102bb4e	FB000039	true		
3c04f299a19ab4b	cb93caf3102bb4e	FB000072	true		
06a4e3973177f0f	cb93caf3102bb4e	FB000080	true		
2dee5224a7fd83f	cb93caf3102bb4e	FB000089	true		
1d85536ab731738	cb93caf3102bb4e	FB000098	true		
024e528ee0595a3	cb93caf3102bb4e	FB000107	true		
2f21e688bf933da	45e1a224d677912	FB000065	true		
d896a9c56c9a2ad	6fdb8baf0bac546	FB000094	1234		
60b335dd4009489	6e798c129a380f0	FB000111	true		
b87838a4c4c35a1	ee5f00d62b72cc4	FB000137	true		
2ecd966a0c027ee	ee5f00d62b72cc4	FB000005	asdf		
042195b06e5865e	69a7b900708685c	FB000148	true		
4e7f57e99e525d6	6e798c129a380f0	FB000148	true		
75b5e2b5c681e88	6e798c129a380f0	FB000010	sdfg asdf		
452452bede208b7	7cb96acccc53861	FB000020	true		
f5ace4a983dc3b9	7cb96acccc53861	FB000119	true		
7294f5a106115de	8b6609172fd12fc	FB000025	true		
60c76aee4ba6f1d	8b6609172fd12fc	FB000077	true		
99bdedbf09390a0	8b6609172fd12fc	FB000127	true		
ba0e3ddc250e8ea	8b6609172fd12fc	FB000151	true		
6e2981bddcab66c	8b6609172fd12fc	FB000009	asdf13r		
4d05701112925dc	7cb96acccc53861	FB000144	true		
0c874898f8c9515	7cb96acccc53861	FB000007	asdfasdf		
3277ba9a8c5b73e	7cb96acccc53861	FB000018	2023-01-19		
f0cd090e146b394	cb93caf3102bb4e	FB000126	true		
ac8983d8a60f13b	cb93caf3102bb4e	FB000137	true		
97a78826f67f097	d57a36c60639b07	FB000144	true		
c14b2a005bdd345	d57a36c60639b07	FB000003	asdf		
2555cf5b3117d94	cb93caf3102bb4e	FB000153	true		
fe816f42eecb54c	cb93caf3102bb4e	FB000005	-		
7f07e2e98d233db	cb93caf3102bb4e	FB000046	aasdfasdf	0000	
2503bc06c55f8b0	1db69953125e16b	FB000153	true		
21592fceeea19f5	1db69953125e16b	FB000004	asdfasdf		
7df5d4c7ae5aa13	eb63f2951d3241c	FB000027	true		
9a3332b3c606ea5	eb63f2951d3241c	FB000128	true		
6a200713acf1066	eb63f2951d3241c	FB000151	true		
49b91224f36e088	eb63f2951d3241c	FB000010	asdfasd		
bee4f03955ce1fc	d18e67b456f8250	FB000107	true		
e8739c58111d271	d18e67b456f8250	FB000133	true		
3b0e8bfb34a21a4	516f43df8a5743f	FB000131	true		
93b1db29d321af5	17eaf519e90a861	FB000131	true		
d7bddc8ea177ebb	17eaf519e90a861	FB000146	true		
b11d0b236694d15	17eaf519e90a861	FB000001	asdf		
0d9c7843fd43880	17eaf519e90a861	FB000065	true		
b8c226d1543ea00	516f43df8a5743f	FB000142	true		
66606dd2b2c195e	516f43df8a5743f	FB000157	true		
d877d03d10309da	516f43df8a5743f	FB000010	asdf		
5b110cab65f0364	d7c54a5b9abad62	FB000151	true		
d017f14cb1994a8	9462387ae8d3621	FB000059	true		
dc0feeb41a82409	9462387ae8d3621	FB000148	true		
f223a7658ead34b	9462387ae8d3621	FB000044	sdfsdf	3413	
267f35e2e0124a2	0b2423cc8bd003e	FB000124	true		
116c8803c6b8d74	0b2423cc8bd003e	FB000151	true		
73ee24f08128729	0b2423cc8bd003e	FB000010	Randi Setyawan		
cfc8a1c41be102a	cb93caf3102bb4e	FB000026	true		
7a88effd5870c36	cb93caf3102bb4e	FB000040	true		
66603fea0d8e521	cb93caf3102bb4e	FB000073	true		
09a1ca9d6ef07e1	cb93caf3102bb4e	FB000081	true		
aab42bdc18d3a2d	cb93caf3102bb4e	FB000090	true		
b6128dfdca862b4	cb93caf3102bb4e	FB000099	true		
80a2dba14eaccf5	cb93caf3102bb4e	FB000108	true		
c9d6bc3b1a3ef12	cb93caf3102bb4e	FB000127	true		
feaaca6b7512266	cb93caf3102bb4e	FB000139	true		
f2f8d1aca9a1747	cb93caf3102bb4e	FB000155	true		
f927cce9f1e7661	cb93caf3102bb4e	FB000009	PT. Berca Hardayaperkasa		
685822cd797bac8	cb93caf3102bb4e	FB000094	nnyaaa		
7639896982944ef	1db69953125e16b	FB000142	true		
fa80e63ef83f004	1db69953125e16b	FB000155	true		
9f22c56ffceeb64	1db69953125e16b	FB000005	asdfasdfsdasdfasdfasdf		
476fff49130c754	516f43df8a5743f	FB000133	true		
ee6900fe5734a2a	516f43df8a5743f	FB000144	true		
4041ae684ba5443	516f43df8a5743f	FB000001	test		
db1875a2814c79f	516f43df8a5743f	FB000011	123		
20d9d4eb4765330	61a311ce254b33c	FB000148	true		
f62b944640ae2a2	61a311ce254b33c	FB000151	true		
9eac9cb90456b13	61a311ce254b33c	FB000153	true		
db86553ba4de940	61a311ce254b33c	FB000155	true		
87171c46e75370b	61a311ce254b33c	FB000157	true		
92c69f6e6301612	61a311ce254b33c	FB000001	asdf		
1c04924d4ba92e6	61a311ce254b33c	FB000003	234		
38199d0c4200149	61a311ce254b33c	FB000004	234		
a76cc2dcc6e599b	61a311ce254b33c	FB000005	234		
216ecd3430412f4	61a311ce254b33c	FB000009	234		
0e6bb94ee7decff	61a311ce254b33c	FB000010	234		
22f7025ae172124	61a311ce254b33c	FB000011	234		
ab1b5a8c5532a33	dda352919cf81b9	FB000135	true		
e084939d9a4c792	dda352919cf81b9	FB000005	asdf		
f6ac2f603c7003d	af8b00d596b2ead	FB000133	true		
13c0f782c725f94	af8b00d596b2ead	FB000003	Kabel gantung		
a0984413b6c7c03	cc5ef893d60564e	FB000144	true		
76ae377e09af548	cc5ef893d60564e	FB000004	aa		
70289cf24d177f8	c91d2c29b9f194e	FB000037	true		
13bd28c8aafad62	c91d2c29b9f194e	FB000096	true		
9cef429ba585038	c91d2c29b9f194e	FB000142	true		
16a102d254adc6a	c91d2c29b9f194e	FB000005	test		
44e6696d0d7ca1d	f82dae290502e70	FB000135	true		
4b9920d633286f2	d57a36c60639b07	FB000146	true		
ee60188a1e2acbf	d57a36c60639b07	FB000004	asdf		
702c52c61479d20	dda352919cf81b9	FB000137	true		
115706762e0f32b	dda352919cf81b9	FB000009	asdf a		
156fecb95293eb9	af8b00d596b2ead	FB000135	true		
a7a5edb15d935dd	af8b00d596b2ead	FB000004	Belakang pabrik		
114982190504d3c	cc5ef893d60564e	FB000146	true		
42b5fa260064fbf	cc5ef893d60564e	FB000005	aa		
567ad0bce3df913	c91d2c29b9f194e	FB000041	true		
2f4c02aec73c2a0	c91d2c29b9f194e	FB000102	true		
3aae04e0565eb38	c91d2c29b9f194e	FB000144	true		
b22ba16c65562dc	c91d2c29b9f194e	FB000009	test		
356879100a0d93f	f82dae290502e70	FB000137	true		
f33d1a685206570	f82dae290502e70	FB000159	true		
01080c7e5bd709c	f82dae290502e70	FB000015	asdf		
f6455bac4be8229	6fdb8baf0bac546	FB000070	true		
2dcfc4fd5252f17	6fdb8baf0bac546	FB000114	true		
3ce55ec098b8994	6fdb8baf0bac546	FB000151	true		
91b3e51f3f28372	6fdb8baf0bac546	FB000011	1234444		
fb153fe832981e2	1b665affe683f4b	FB000135	true		
8c82be62a4ec3f2	1b665affe683f4b	FB000148	true		
29ef4aeca530e33	1b665affe683f4b	FB000001	234		
5f75c9e2274140f	1b665affe683f4b	FB000011	234		
7f6f313602eecaf	6f7d23e0b70ae23	FB000142	true		
dc047d0959a65d3	6f7d23e0b70ae23	FB000155	true		
23ebbf94c679f07	6f7d23e0b70ae23	FB000005	asdf		
4522aa5672a91c4	6e798c129a380f0	FB000020	true		
48beaadee6e6b3f	1c84142c16881cc	FB000037	true		
16bd8d6958e76d4	69a7b900708685c	FB000151	true		
a3d41d3bdc65bea	ee5f00d62b72cc4	FB000139	true		
651a7e21452b24e	ee5f00d62b72cc4	FB000009	asdf		
c8793700bfc48e0	6e798c129a380f0	FB000112	true		
c743a4254afb62a	6e798c129a380f0	FB000151	true		
3e47526c5341300	6e798c129a380f0	FB000011	123		
ef681a60234e3fa	7cb96acccc53861	FB000021	true		
a14b7361f6170b4	45e1a224d677912	FB000021	true		
b3c8f3e820bdb66	45e1a224d677912	FB000089	true		
cdc90b3dde93b2f	45e1a224d677912	FB000129	true		
c89e57f7796a47c	833c802892df8e4	FB000022	true		
0dc950663f6587c	833c802892df8e4	FB000135	true		
d3d26d8da132e55	833c802892df8e4	FB000151	true		
6be1a1ef71967e9	833c802892df8e4	FB000004	asf		
5c6240448be2501	45e1a224d677912	FB000146	true		
554ca1412c0cf96	45e1a224d677912	FB000004	asdf		
29866e7336e36f4	45e1a224d677912	FB000067	false		
e870a4817429c32	8b6609172fd12fc	FB000026	true		
5667cdb2c30288f	8b6609172fd12fc	FB000079	true		
6e7e3ff3f0984b4	8b6609172fd12fc	FB000128	true		
db450142998538e	8b6609172fd12fc	FB000153	true		
271812adbf8ae50	8b6609172fd12fc	FB000010	asdfa		
1116316ef034920	7cb96acccc53861	FB000120	true		
74f31c461c71efb	7cb96acccc53861	FB000146	true		
d0c6e4003ea12c3	4d65aee4d77f1ac	FB000144	true		
6baeeaf9146886b	4d65aee4d77f1ac	FB000159	true		
7bbd4593825eb0b	4d65aee4d77f1ac	FB000011	234		
e7f3d24844d631b	d57a36c60639b07	FB000020	true		
dcbcb8072badde9	b5156a492f2838f	FB000028	true		
ca75ed3f5799b62	b5156a492f2838f	FB000075	true		
7c831b4c0a91331	b5156a492f2838f	FB000133	true		
c1e2fb251561713	b5156a492f2838f	FB000148	true		
5be6a0a4b364a0f	d57a36c60639b07	FB000148	true		
e144ff4183bc123	d7c54a5b9abad62	FB000153	true		
d63ca270fb28b4c	5863d9a6b1cc3c0	FB000135	true		
e490db530d6b965	5863d9a6b1cc3c0	FB000151	true		
7c397cff6829d2e	5863d9a6b1cc3c0	FB000003	asdf		
4e7d2a0651b57a9	d57a36c60639b07	FB000005	asdf		
12678ef2e563538	7cb96acccc53861	FB000009	fsdfsdf		
eb4bf1c69f9b5ee	7cb96acccc53861	FB000019	13:00		
aba11c511fee615	b54665cb812e987	FB000142	true		
0495589f97534f6	b54665cb812e987	FB000157	true		
b8ca3469f52ae09	b54665cb812e987	FB000010	sdf		
05f32dab577dad2	9462387ae8d3621	FB000060	true		
c83168ce0e36f16	9462387ae8d3621	FB000151	true		
2cd53e9e6f7d5b1	0b2423cc8bd003e	FB000125	true		
fe8348b8493c730	0b2423cc8bd003e	FB000153	true		
6cd1e5515536840	0240fe6e0754b07	FB000110	sdf sdffsdf		
009908f5c6d0458	0240fe6e0754b07	FB000139	true		
7352352f3fbaf87	0240fe6e0754b07	FB000155	true		
aa43e008a788261	0240fe6e0754b07	FB000009	fasd 		
825349afa1ad6a1	eb63f2951d3241c	FB000028	true		
630491700da4fc0	eb63f2951d3241c	FB000131	true		
fbf2c9f9ca897af	eb63f2951d3241c	FB000153	true		
a6ea99833c6e676	eb63f2951d3241c	FB000011	123		
e775109789cbb3c	0b2423cc8bd003e	FB000011	4		
cbdd56664dc1f0f	cb93caf3102bb4e	FB000027	true		
9afe260a4fb5b7d	cb93caf3102bb4e	FB000042	lainnya		
d3a8928e70aeeb6	cb93caf3102bb4e	FB000074	true		
8a8a6c1c9706bf1	d18e67b456f8250	FB000108	true		
5543a98965f7040	d18e67b456f8250	FB000135	true		
2c8d8f222721292	d18e67b456f8250	FB000148	true		
e968074a493154b	d18e67b456f8250	FB000001	Test		
a5de2c12a975af5	cb93caf3102bb4e	FB000082	true		
fa0fc194f01410b	cb93caf3102bb4e	FB000091	true		
f7d5811c3a8f9b8	cb93caf3102bb4e	FB000101	true		
f40bacc2e17848a	cb93caf3102bb4e	FB000109	true		
27af3293c3ab9ff	cb93caf3102bb4e	FB000128	true		
940826388e1c76e	cb93caf3102bb4e	FB000142	true		
5576c3338dc2844	cb93caf3102bb4e	FB000157	true		
7590f0546681532	cb93caf3102bb4e	FB000010	Jumadil Abdul Rahman Selian		
a3a431e1c6bfa39	1db69953125e16b	FB000131	true		
e85201f9ce40c1a	1db69953125e16b	FB000144	true		
4bb1cd77bc64b90	1db69953125e16b	FB000157	true		
edebae578f323db	1db69953125e16b	FB000009	asdfasdf		
205670fad27b7c0	dda352919cf81b9	FB000139	true		
c9d88892b61f5f7	dda352919cf81b9	FB000010	asdf		
e01ffde0dd7a2fb	1b665affe683f4b	FB000137	true		
ed5052fed113ca2	1b665affe683f4b	FB000151	true		
25065d859e82386	1b665affe683f4b	FB000003	234		
5ba0576f7e8383f	6f7d23e0b70ae23	FB000131	true		
90f737a9facb995	6f7d23e0b70ae23	FB000144	true		
54bcd3e02d2afea	6f7d23e0b70ae23	FB000157	true		
0e9cb43efc64b6a	6f7d23e0b70ae23	FB000009	asdf		
081e8dcfbfd512a	af8b00d596b2ead	FB000137	true		
fd003173dc5baae	af8b00d596b2ead	FB000005	Lidah buaya		
1a44d217492b260	69a7b900708685c	FB000153	true		
963fad9d49812ab	ee5f00d62b72cc4	FB000142	true		
07629f0183c784b	ee5f00d62b72cc4	FB000010	asdf		
9c311c37f99655c	cc5ef893d60564e	FB000148	true		
9acff50ad359f29	cc5ef893d60564e	FB000009	a		
84ef770e9e770e1	c91d2c29b9f194e	FB000042	wkwkwkw		
cd04c6c03c06ea7	c91d2c29b9f194e	FB000107	true		
04add09efcc6f38	8b6609172fd12fc	FB000027	true		
5080ac0392de43e	8b6609172fd12fc	FB000080	true		
af544104dfa1e95	8b6609172fd12fc	FB000131	true		
2bb50e1130fc6a3	8b6609172fd12fc	FB000155	true		
5cb6f1683a071d5	833c802892df8e4	FB000069	true		
e208c0925647f4a	c91d2c29b9f194e	FB000146	true		
7d3a9fc3937dff6	c91d2c29b9f194e	FB000010	test		
97ca5ede226e5be	f82dae290502e70	FB000139	true		
be4b1fe1cd1ebec	f82dae290502e70	FB000001	asdf		
4513a1a584c0a74	f82dae290502e70	FB000016	234		
557123c2d3d3ca0	6fdb8baf0bac546	FB000076	true		
4bfecee147292ee	6fdb8baf0bac546	FB000131	true		
398185b672c2aed	6fdb8baf0bac546	FB000153	true		
49887797eaaec6e	6fdb8baf0bac546	FB000012	asdf		
a411c5e09652e78	6e798c129a380f0	FB000021	true		
3052e58b61e460e	6e798c129a380f0	FB000131	true		
a00243623e9a59e	6e798c129a380f0	FB000153	true		
059b1edbb5038f2	6e798c129a380f0	FB000012	asdf		
e4b2f85c80bc377	7cb96acccc53861	FB000022	true		
6775f41c361df3e	7cb96acccc53861	FB000121	true		
1fd5770a77953eb	7cb96acccc53861	FB000148	true		
307c6bb0eaabf1a	7cb96acccc53861	FB000010	sdfsdf		
c137b252ad15402	d57a36c60639b07	FB000131	true		
73083139b51bcfb	d57a36c60639b07	FB000151	true		
08ae195d3449fe4	d57a36c60639b07	FB000009	asdf		
74ea101b46f10c6	d7c54a5b9abad62	FB000155	true		
3588a51591ef7eb	9462387ae8d3621	FB000061	true		
0f09b9d5eda4ba5	9462387ae8d3621	FB000153	true		
b59800668114fc9	0b2423cc8bd003e	FB000127	true		
5e09a3f4aee0ccd	eb63f2951d3241c	FB000029	true		
e22f55452947c1f	eb63f2951d3241c	FB000133	true		
b8b1a5bb74caaed	833c802892df8e4	FB000137	true		
d6f4a0ce6906039	833c802892df8e4	FB000153	true		
3e799898e55a289	eb63f2951d3241c	FB000155	true		
c36f1db6713d05b	8b6609172fd12fc	FB000011	323		
249a5375decfbcd	833c802892df8e4	FB000005	gsdfg		
3537d64a98d875a	eb63f2951d3241c	FB000043	asdf	123	
f55f5645b7a8a8f	0b2423cc8bd003e	FB000155	true		
06c32746a535d7f	0b2423cc8bd003e	FB000043	Tangga	1	
bd01c88f8c07d0d	cb93caf3102bb4e	FB000031	true		
daf068f74f92f11	cb93caf3102bb4e	FB000068	true		
6c81ef242a8bb7e	b54665cb812e987	FB000093	1324		
ed2b70cc8be9a8a	4d65aee4d77f1ac	FB000131	true		
e0e7d8a652a7a9b	4d65aee4d77f1ac	FB000146	true		
0132170a302bb22	4d65aee4d77f1ac	FB000001	qawdf		
50991a2e7298fae	b54665cb812e987	FB000144	true		
a094bd1a61b8520	cb93caf3102bb4e	FB000075	true		
2df11d80e6833f5	cb93caf3102bb4e	FB000083	laaa		
d80601cee827cef	cb93caf3102bb4e	FB000092	true		
5a7355544129608	cb93caf3102bb4e	FB000102	true		
a232493206d6912	cb93caf3102bb4e	FB000110	nyaaaa		
0d1d47493bfad16	cb93caf3102bb4e	FB000188	masukkan lainnya		
9b1a785395e6cdc	5863d9a6b1cc3c0	FB000137	true		
c42c83556c0eec7	b54665cb812e987	FB000159	true		
961ae8ae0493bda	b54665cb812e987	FB000011	123		
469303c07436293	0240fe6e0754b07	FB000128	true		
f29e70f7a3a0e58	0240fe6e0754b07	FB000142	true		
63b53f905360ace	0240fe6e0754b07	FB000157	true		
ecf6d01c7dd3ffa	0240fe6e0754b07	FB000010	sdf sdf		
f7f47f0a46007e8	d18e67b456f8250	FB000109	true		
08263c47ee6b00f	d18e67b456f8250	FB000137	true		
7fa053e7d51626f	d18e67b456f8250	FB000151	true		
5bafb99dd93c720	d18e67b456f8250	FB000003	fasil		
6ecec820d9632f0	cb93caf3102bb4e	FB000144	true		
bfdc46ff7cec6d0	cb93caf3102bb4e	FB000159	true		
a2342ef505aa994	d18e67b456f8250	FB000011	90		
0ba10966d8f970a	cb93caf3102bb4e	FB000011	4		
7ada69d19d1ce71	1db69953125e16b	FB000133	true		
53e5c7f4b6cdc04	1db69953125e16b	FB000146	true		
b87f40ab10b9260	1db69953125e16b	FB000159	true		
d21759a40be14c9	1db69953125e16b	FB000010	asdfasdfasdf		
91a5f4804f57079	2fe1398eace89cf	FB000026	true		
0995dbc7bfbce55	516f43df8a5743f	FB000135	true		
63b1887144908ec	516f43df8a5743f	FB000146	true		
9321b3d8cf42613	516f43df8a5743f	FB000003	asdf		
13d294f2109345f	45e1a224d677912	FB000027	true		
1d9b881098a7c02	45e1a224d677912	FB000090	true		
807c16d9e870256	45e1a224d677912	FB000188	hogogohoh		
bb391d23fb15746	45e1a224d677912	FB000148	true		
ea6cba38b6650af	45e1a224d677912	FB000005	asdf		
1ccb2f6a9c6c63c	dda352919cf81b9	FB000142	true		
1f3ddfffa473012	dda352919cf81b9	FB000011	123		
4fb931bea4e45aa	ee5f00d62b72cc4	FB000144	true		
3614bb59c5fce5b	ee5f00d62b72cc4	FB000011	123		
3c849b2b9348f0e	af8b00d596b2ead	FB000139	true		
30f1ab04f6582c4	69a7b900708685c	FB000155	true		
6835e22c1420e6f	af8b00d596b2ead	FB000009	Inalum		
b6f073d3d839336	cc5ef893d60564e	FB000151	true		
3111c0f23203ef7	cc5ef893d60564e	FB000010	a		
4f6f4d2be2ef3a9	b5156a492f2838f	FB000035	true		
2201bc934195b9f	b5156a492f2838f	FB000096	true		
d29e6379777d527	b5156a492f2838f	FB000135	true		
7de9c243e96712a	b5156a492f2838f	FB000151	true		
fbfb750189cbf24	b5156a492f2838f	FB000001	Deskripsi pekerjaan		
d5bff44159885fc	8b6609172fd12fc	FB000031	true		
49edf3706e42fcb	8b6609172fd12fc	FB000081	true		
e7cb7590db8a9d9	8b6609172fd12fc	FB000133	true		
311f1a9d77b1b06	8b6609172fd12fc	FB000157	true		
9637a13c994fe4b	8b6609172fd12fc	FB000043	asdf	13	
272a7811bb6acef	c91d2c29b9f194e	FB000048	true		
2716ad38eb0b4de	c91d2c29b9f194e	FB000123	true		
394c3fb5a4d849b	c91d2c29b9f194e	FB000148	true		
3066af2e9aafb51	c91d2c29b9f194e	FB000011	234		
d17454d05b95730	f82dae290502e70	FB000142	true		
8ea91d1db7699e3	f82dae290502e70	FB000006	asdf		
4a50a4db76fd30e	f82dae290502e70	FB000017	adsf		
6d0c97a4d6bbccf	6fdb8baf0bac546	FB000089	true		
96fb2a7887f721f	6fdb8baf0bac546	FB000133	true		
573ea74a235de09	6fdb8baf0bac546	FB000155	true		
26ee6f730b37b85	1c84142c16881cc	FB000042	asdfasdf asdfa		
415cdcd7ce2c7d6	1c84142c16881cc	FB000076	true		
5b831873afa2d96	1c84142c16881cc	FB000124	true		
25a7b1cee970d1b	1c84142c16881cc	FB000142	true		
69b1b1f634d8adf	1c84142c16881cc	FB000155	true		
bbf9753f2547210	1c84142c16881cc	FB000005	asdfsd		
efdf19ce60ae42f	6fdb8baf0bac546	FB000013	werw		
3aad50e59425fd2	6e798c129a380f0	FB000033	true		
31d291dc4e2bec5	b54665cb812e987	FB000131	true		
9ae1f469cd5fc83	b54665cb812e987	FB000146	true		
68326147f10c577	b54665cb812e987	FB000001	asdf		
0b8e91220031946	b54665cb812e987	FB000094	fsdf		
6279a940dd5bc53	0240fe6e0754b07	FB000188	fafa afafdf asdf		
b0bfea860d3a538	0240fe6e0754b07	FB000144	true		
f72e4ddd10c4b09	0240fe6e0754b07	FB000159	true		
373e2a87afe5ff9	0240fe6e0754b07	FB000011	333		
db399b584fc6f01	6e798c129a380f0	FB000133	true		
19d661f652f6c42	6e798c129a380f0	FB000155	true		
a07735566f35c2a	1c84142c16881cc	FB000045	asfasd||asdfas||asdfas	234||2342||2342	
5f9e856c81a8277	6e798c129a380f0	FB000013	23		
4b778db26570e09	7cb96acccc53861	FB000023	true		
e9d26555108b5b8	7cb96acccc53861	FB000122	true		
7b9a86aaa862e9d	7cb96acccc53861	FB000151	true		
c51aeab0918646f	7cb96acccc53861	FB000011	123		
1ae74e8a662d413	eb63f2951d3241c	FB000050	true		
5219f973d84444e	eb63f2951d3241c	FB000135	true		
228ead5e027d2d6	eb63f2951d3241c	FB000157	true		
80fc9d38e6062ee	eb63f2951d3241c	FB000094	fsdf		
040bce45d02d1b0	d7c54a5b9abad62	FB000157	true		
0872a018edbf656	d18e67b456f8250	FB000036	true		
481609cc8a28c5b	d57a36c60639b07	FB000133	true		
ecd774f531a2184	d57a36c60639b07	FB000153	true		
5c84edc703522b4	d57a36c60639b07	FB000010	asdf		
e8f7e770bd6c145	d18e67b456f8250	FB000110	sebutkan		
e35e0890696d3a4	d18e67b456f8250	FB000139	true		
80aee69872765b3	d18e67b456f8250	FB000153	true		
e76c0f148f94f44	d18e67b456f8250	FB000004	area		
dbe68c1c2fa4ac2	d18e67b456f8250	FB000043	alat	9	
f835422dfcb1bc4	9462387ae8d3621	FB000062	true		
e137797a6986226	9462387ae8d3621	FB000155	true		
8f07060497b375a	0b2423cc8bd003e	FB000128	true		
ddf6836d36d646f	56e801ace315645	FB000133	true		
82125556c44462a	56e801ace315645	FB000146	true		
9a4415645899edf	56e801ace315645	FB000159	true		
6d5c1529d649c43	56e801ace315645	FB000011	134		
c655aaa4d60bd84	56e801ace315645	FB000018	2023-01-13		
481808df458e2b4	38e8f73d4bb470e	FB000131	true		
f4fadfd1d9ee58b	38e8f73d4bb470e	FB000144	true		
943c003af366e76	38e8f73d4bb470e	FB000157	true		
417a4c0ce7d5624	38e8f73d4bb470e	FB000010	Nama Pengawas		
7bb4dd29f634c89	38e8f73d4bb470e	FB000017	Namanya		
86b177c3cd6c15a	79b3763ea9e6b7b	FB000025	true		
9512af0d29cfaca	79b3763ea9e6b7b	FB000040	true		
d48bd6686385263	79b3763ea9e6b7b	FB000075	true		
19059e93479ffca	79b3763ea9e6b7b	FB000092	true		
f5f3e9c8ff7cd91	79b3763ea9e6b7b	FB000116	true		
795afaefcd04ff1	79b3763ea9e6b7b	FB000133	true		
0c195662a860c69	79b3763ea9e6b7b	FB000137	true		
b9208ffa1aca96c	79b3763ea9e6b7b	FB000142	true		
8381096578352a8	79b3763ea9e6b7b	FB000146	true		
8d68aa8eb85b1c6	79b3763ea9e6b7b	FB000151	true		
d2370f1a6565ec2	79b3763ea9e6b7b	FB000155	true		
57a7a1103450654	79b3763ea9e6b7b	FB000159	true		
e5b260116d6ea13	79b3763ea9e6b7b	FB000006	Ruang Server SIT		
7e8a42bbbbf4f2a	79b3763ea9e6b7b	FB000009	PT Mitra Integrasi Informatika		
52dc230b131ffe0	79b3763ea9e6b7b	FB000011	5		
6b8e6b90d2a0bf5	79b3763ea9e6b7b	FB000013	0		
0b8400334e1ef42	45e1a224d677912	FB000031	true		
6680c09fa1d70eb	45e1a224d677912	FB000098	true		
ef64c4c945df4ce	45e1a224d677912	FB000131	true		
b288d91d14a05e4	45e1a224d677912	FB000151	true		
d2307b649ecac70	45e1a224d677912	FB000009	asdf		
7962ff3a439af2f	dda352919cf81b9	FB000144	true		
f58638d4a91ba14	af8b00d596b2ead	FB000022	true		
64544e68f1bac46	1b665affe683f4b	FB000139	true		
2affe92df135ff2	1b665affe683f4b	FB000153	true		
7d03cbd7d889084	1b665affe683f4b	FB000004	234		
bc66cdb9082c31e	6f7d23e0b70ae23	FB000133	true		
5092a81ad1f51c3	6f7d23e0b70ae23	FB000146	true		
186399c634d4d7f	6f7d23e0b70ae23	FB000159	true		
7ea3972f6860a2d	6f7d23e0b70ae23	FB000010	asdf		
204831137b0aebc	ee5f00d62b72cc4	FB000146	true		
3e589dac2e01583	ee5f00d62b72cc4	FB000043	hahaha	54	
37d01d5f10ece41	af8b00d596b2ead	FB000142	true		
3d77356671fb675	69a7b900708685c	FB000157	true		
27c3778db39f8d7	af8b00d596b2ead	FB000010	sukijo		
45aaa1445fcadfd	cc5ef893d60564e	FB000153	true		
8cffdde86774c0d	cc5ef893d60564e	FB000011	2		
58d5cc666210e10	b5156a492f2838f	FB000050	true		
b2970c389d3ff75	b5156a492f2838f	FB000126	true		
8fc62919d50b6d9	b5156a492f2838f	FB000137	true		
59201c0f3f16541	b5156a492f2838f	FB000153	true		
bead7319c3cfd2e	b5156a492f2838f	FB000003	Ruang SIT		
d976a3d602979ef	b5156a492f2838f	FB000010	Jumadil		
6650ad0a8dfff56	8b6609172fd12fc	FB000032	true		
081679415ea15bc	8b6609172fd12fc	FB000085	true		
51823d3be8f900a	8b6609172fd12fc	FB000135	true		
fe06c0a7e90f71d	8b6609172fd12fc	FB000159	true		
81499df1bf8f49d	8b6609172fd12fc	FB000044	asdf	34	
f4ec8083029e616	c91d2c29b9f194e	FB000049	true		
197ccc93614a66f	c91d2c29b9f194e	FB000124	true		
7bcaaf7669757fa	c91d2c29b9f194e	FB000151	true		
85f613964e233dc	c91d2c29b9f194e	FB000043	haha	234	
a378e46e9e8d3dc	f82dae290502e70	FB000144	true		
5c306c893a58c15	f82dae290502e70	FB000007	asdf		
4555c64116cb4b6	b54665cb812e987	FB000133	true		
9d0e5fcec4162c1	b54665cb812e987	FB000148	true		
57e35cb17b39a32	b54665cb812e987	FB000003	sdf		
3efe141acf8a488	0240fe6e0754b07	FB000042	wfwfwf		
e58df168262400c	0240fe6e0754b07	FB000131	true		
6ffb429c35a6519	f82dae290502e70	FB000018	2023-01-29		
3cc3ddd0f714445	6fdb8baf0bac546	FB000090	true		
6ae104d2def9c98	6fdb8baf0bac546	FB000135	true		
a9f6c7deea9e86e	6fdb8baf0bac546	FB000157	true		
a780c3eea29096d	6fdb8baf0bac546	FB000014	fghfgh		
520b30b4ef4d21a	6e798c129a380f0	FB000034	true		
3c261d16b46a858	0240fe6e0754b07	FB000146	true		
84539f493568e20	0240fe6e0754b07	FB000001	asdf		
4b7cdd2102c67f6	0240fe6e0754b07	FB000043	asdf	123	
7f71937e7527013	6e798c129a380f0	FB000135	true		
9f161bc052c8817	6e798c129a380f0	FB000157	true		
439ca9f26220bd8	6e798c129a380f0	FB000014	asdf		
c27533434aa5d4f	7cb96acccc53861	FB000024	true		
14fee9bddbc3724	7cb96acccc53861	FB000131	true		
44d1d217090eb38	7cb96acccc53861	FB000153	true		
f175ab888443963	7cb96acccc53861	FB000012	sdfsd		
f0b16da47d40db0	9374709c447b63e	FB000133	true		
d787351102b6072	9374709c447b63e	FB000142	true		
5ba0d1a020310e8	9374709c447b63e	FB000151	true		
578587119e420f9	9374709c447b63e	FB000159	true		
76b4fb81d6c5ba9	9374709c447b63e	FB000005	234		
e33145bd96600bc	d7c54a5b9abad62	FB000159	true		
bd4fcbf0f62a3bc	1c84142c16881cc	FB000047	true		
000a36465a9c752	1c84142c16881cc	FB000079	true		
649a886349481fa	1c84142c16881cc	FB000126	true		
fe5f3a447135926	eb63f2951d3241c	FB000051	true		
c28d109b652ef99	eb63f2951d3241c	FB000137	true		
8f79455097bb9a1	eb63f2951d3241c	FB000159	true		
979cebae3e69a8e	9462387ae8d3621	FB000063	true		
0b1325efbe93b1a	9462387ae8d3621	FB000157	true		
52b4aae61ee69ea	d18e67b456f8250	FB000037	true		
693aa00a60df7b9	d18e67b456f8250	FB000123	true		
0ae35495cd4914c	d18e67b456f8250	FB000142	true		
2f3a0ae298bea7f	d18e67b456f8250	FB000155	true		
f1f0c8408ca0da7	d18e67b456f8250	FB000005	3		
9f1c68071cf7cb6	d18e67b456f8250	FB000044	mesin	6	
b0db6bfe021ddf2	0b2423cc8bd003e	FB000129	true		
d74c24669bd05a2	0b2423cc8bd003e	FB000157	true		
91944bce83620dd	cb93caf3102bb4e	FB000020	true		
71461bfc70af9f8	d57a36c60639b07	FB000135	true		
66d8cf58ba0c2b9	d57a36c60639b07	FB000155	true		
0c0216b931732d5	d57a36c60639b07	FB000011	234		
d88046b57afae2b	cb93caf3102bb4e	FB000032	true		
93a2b278f525344	17eaf519e90a861	FB000133	true		
74a474b932de597	17eaf519e90a861	FB000148	true		
fcb339cad7aa973	17eaf519e90a861	FB000003	asdf		
ea309f2b87228eb	17eaf519e90a861	FB000067	true		
79e937a5ef370f5	3aa7a14111037bd	FB000038	true		
f0f759032381c7a	3aa7a14111037bd	FB000125	true		
2303d0c7be34041	3aa7a14111037bd	FB000135	true		
0cc54dddf259e18	3aa7a14111037bd	FB000146	true		
ad88d8e5a139e72	3aa7a14111037bd	FB000157	true		
c0234cf4b3215d6	3aa7a14111037bd	FB000005	-		
5a3b186b85e2a25	3aa7a14111037bd	FB000045	Lampu	3	
caa16c4a1f5df20	c91d2c29b9f194e	FB000052	true		
5e4c9c59c343dbb	c91d2c29b9f194e	FB000127	true		
ff9228621338f70	c91d2c29b9f194e	FB000153	true		
211cbc20b89fe16	c91d2c29b9f194e	FB000044	 adfa sdf 	245	
fbb072c5e11041a	d7c54a5b9abad62	FB000001	asdf		
0ca3229dab90f1f	1c84142c16881cc	FB000027	true		
e614a86738bde14	1c84142c16881cc	FB000048	true		
1ea0591dc3e312b	1c84142c16881cc	FB000086	true		
4ce45c149db88a0	1c84142c16881cc	FB000131	true		
8207abbdeac1214	1c84142c16881cc	FB000144	true		
24ade5e68bb1cef	1c84142c16881cc	FB000157	true		
f09c8891c4bbe19	1c84142c16881cc	FB000009	sdfasd asdf adfasdf asdfasdfa		
a0505f42b7c3a0a	1c84142c16881cc	FB000046	asdfaw||asdfa	234||12342	
268c284f933467b	9462387ae8d3621	FB000072	true		
febdbfd38c50305	9462387ae8d3621	FB000159	true		
80fe8de465222b2	0b2423cc8bd003e	FB000131	true		
1c933d2b684eabd	0b2423cc8bd003e	FB000159	true		
f47be60d23cea92	cb93caf3102bb4e	FB000021	true		
3e8ebc124fa2abb	cb93caf3102bb4e	FB000033	true		
997974de0a26436	cb93caf3102bb4e	FB000069	true		
f59d08a3e0bd9e9	cb93caf3102bb4e	FB000076	true		
8cc54026486a26e	cb93caf3102bb4e	FB000085	true		
7e89a359e162ea9	cb93caf3102bb4e	FB000093	innn		
aad94a2796abee4	cb93caf3102bb4e	FB000103	true		
81a52b734a16981	cb93caf3102bb4e	FB000123	true		
09a4a2e3e7aea94	cb93caf3102bb4e	FB000131	true		
3c18dc4a0e1694a	cb93caf3102bb4e	FB000146	true		
2356f71ec31f76e	cb93caf3102bb4e	FB000001	Tes isi semua field pada surat izin kerja aman online untuk sika panas		
ad264e8785e63cd	1b665affe683f4b	FB000142	true		
4ab3a69c3d528b7	cb93caf3102bb4e	FB000043	isi semua alat||alat 2||alat 3	1||2||3	
af99f7acc865694	45e1a224d677912	FB000032	true		
c63e1865c41a7d1	45e1a224d677912	FB000099	true		
bb6f0f095428f69	45e1a224d677912	FB000133	true		
202e0e7e9e9fde3	45e1a224d677912	FB000153	true		
26d44114d53cf6d	45e1a224d677912	FB000010	asdf		
be1b70dea99f566	dda352919cf81b9	FB000146	true		
2c1864442b31c4a	af8b00d596b2ead	FB000025	true		
8bc789d7c686ab2	ee5f00d62b72cc4	FB000148	true		
9de2d3e63e78361	69a7b900708685c	FB000159	true		
7b969b2d65b9836	ee5f00d62b72cc4	FB000046	hohoho	76	
01137cb9118f824	af8b00d596b2ead	FB000144	true		
f840bd342ebf36d	af8b00d596b2ead	FB000011	3		
56a22edb343ae72	cc5ef893d60564e	FB000155	true		
b167e1e676866f0	8b6609172fd12fc	FB000068	true		
c318f6ec6866425	8b6609172fd12fc	FB000086	true		
40af002abc04789	8b6609172fd12fc	FB000137	true		
2af9924fe32c044	8b6609172fd12fc	FB000001	asdf		
8d740e3515077a2	8b6609172fd12fc	FB000045	asdf13	1234	
e7e6ff5e41dc0a4	56e801ace315645	FB000135	true		
e46f3f8f160d8fa	56e801ace315645	FB000148	true		
d86a323ad9f65be	56e801ace315645	FB000001	asf		
7a4ac30c93f8880	56e801ace315645	FB000012	13		
896331e9e8b82a5	56e801ace315645	FB000019	12:00		
6fdc2fd1e704a46	38e8f73d4bb470e	FB000133	true		
89b4063ee92bfa2	38e8f73d4bb470e	FB000146	true		
46b2dff7c192379	38e8f73d4bb470e	FB000159	true		
35abf6b791b96bf	38e8f73d4bb470e	FB000011	17		
767e0b64b9f9763	38e8f73d4bb470e	FB000018	2023-01-31		
ee96d0e2adfe26f	1b665affe683f4b	FB000155	true		
028c6391582f0e9	1b665affe683f4b	FB000005	234		
b812cdffae749c9	6f7d23e0b70ae23	FB000135	true		
d7a46113ca9dbca	6f7d23e0b70ae23	FB000148	true		
42ea748e0eedd8a	6f7d23e0b70ae23	FB000001	asdf		
9cf3ca118de0850	6f7d23e0b70ae23	FB000011	34		
9889377a2a6df07	79b3763ea9e6b7b	FB000027	true		
0d160153a76e637	79b3763ea9e6b7b	FB000069	true		
ad543b860bdcbe9	79b3763ea9e6b7b	FB000079	true		
03af2d1c42de419	79b3763ea9e6b7b	FB000096	true		
41ddefabc3e6370	79b3763ea9e6b7b	FB000120	true		
f2b7b42321a120c	833c802892df8e4	FB000075	true		
40b4b50aaf2a52b	833c802892df8e4	FB000139	true		
fdd1e37eff38b6e	833c802892df8e4	FB000155	true		
999c508ba129af3	833c802892df8e4	FB000009	adfgqwe		
1e89c8c42a4b4a0	4d65aee4d77f1ac	FB000133	true		
e10713af1c424d2	4d65aee4d77f1ac	FB000148	true		
d68c628da2be654	4d65aee4d77f1ac	FB000003	asdf		
088b0d4f0dbae43	5863d9a6b1cc3c0	FB000139	true		
dd39011f61147c7	5863d9a6b1cc3c0	FB000153	true		
15f3a8c254dfa2e	5863d9a6b1cc3c0	FB000004	asdf		
27e667b8c36be98	5863d9a6b1cc3c0	FB000065	true		
dc57935e82b034a	018e7c52f853790	FB000023	true		
834eac93771ebeb	018e7c52f853790	FB000031	true		
2ce3bd30572f454	018e7c52f853790	FB000039	true		
d3c932512929ee9	018e7c52f853790	FB000070	true		
1b96e2ac6edaf81	018e7c52f853790	FB000075	true		
5171f8c2b52616e	018e7c52f853790	FB000081	true		
48c00eced91d5db	018e7c52f853790	FB000089	true		
c0238d6908a8eed	018e7c52f853790	FB000097	true		
6a3268f96e27a69	018e7c52f853790	FB000103	true		
4f5a3877dc53599	018e7c52f853790	FB000123	true		
6b80e88f94ee05d	018e7c52f853790	FB000128	true		
65c834612bf63dd	018e7c52f853790	FB000139	true		
60f9b462bb6bd22	018e7c52f853790	FB000151	true		
17a6cf415a6821c	018e7c52f853790	FB000001	Bunuh Cicak		
78dccd37cbb02b3	018e7c52f853790	FB000010	Fathur		
3f79471f7f39196	018e7c52f853790	FB000046	tronton	1	
78953ea86076f81	60e8137cd105aac	FB000021	true		
8734c98fab03907	60e8137cd105aac	FB000079	true		
3ae719e834520be	60e8137cd105aac	FB000131	true		
ab477b08b0d86a8	60e8137cd105aac	FB000139	true		
26042a29bacff4b	dda352919cf81b9	FB000148	true		
f9e263caf81908c	69a7b900708685c	FB000131	true		
2cebb5124a34016	69a7b900708685c	FB000001	qwer		
ca8a27ff1c327a2	af8b00d596b2ead	FB000027	true		
ba64998c484a687	45e1a224d677912	FB000033	true		
14fbe48f4e5e779	45e1a224d677912	FB000107	true		
1308c4e346b292c	45e1a224d677912	FB000135	true		
e795064118d204e	833c802892df8e4	FB000123	true		
86dc81e82a1b2ff	833c802892df8e4	FB000142	true		
6f1d32005e2c1b8	833c802892df8e4	FB000157	true		
9b4fc1fde618ec6	833c802892df8e4	FB000010	asrq		
16da25fa59731dd	45e1a224d677912	FB000155	true		
fb8c1e340c53ce6	45e1a224d677912	FB000011	1234		
13f352b89f66501	ee5f00d62b72cc4	FB000151	true		
733ab5429707bb7	ee5f00d62b72cc4	FB000094	asdf		
c33f18972a44816	af8b00d596b2ead	FB000146	true		
e1f75b8c2304d42	af8b00d596b2ead	FB000043	Tali	5	
a767d688eabc1e9	4d65aee4d77f1ac	FB000135	true		
c4971eb61bff99d	4d65aee4d77f1ac	FB000151	true		
0d54c8132862a50	4d65aee4d77f1ac	FB000004	asdf		
b848ba595ea6106	d7c54a5b9abad62	FB000003	asdf		
b71122741e237e8	5863d9a6b1cc3c0	FB000142	true		
f486b23f32a5e81	5863d9a6b1cc3c0	FB000155	true		
e21b521f76aff73	5863d9a6b1cc3c0	FB000005	asdf		
feb9d9e5a32340c	5863d9a6b1cc3c0	FB000067	false		
3d33a8a2427df60	018e7c52f853790	FB000024	true		
47342878a41954f	018e7c52f853790	FB000032	true		
769d507e3fa07e5	018e7c52f853790	FB000040	true		
78e6231e83d184f	018e7c52f853790	FB000071	true		
fd254ee003c24a5	018e7c52f853790	FB000076	true		
16ee826bb9028ef	018e7c52f853790	FB000082	true		
292e87f880eaf5d	018e7c52f853790	FB000090	true		
a93ab5ddffdc675	018e7c52f853790	FB000098	true		
552f3758543b795	018e7c52f853790	FB000104	true		
1214f2e81d54abe	018e7c52f853790	FB000124	true		
9112c4f361a458a	018e7c52f853790	FB000131	true		
0042ccffa5b7e7d	018e7c52f853790	FB000142	true		
420262c081602cf	018e7c52f853790	FB000153	true		
3b556031d22a45e	018e7c52f853790	FB000003	Panjat Tower		
a2e0d6385b6ebc1	018e7c52f853790	FB000011	3		
2584c32f6db2235	8b6609172fd12fc	FB000070	true		
85c0411f4833902	8b6609172fd12fc	FB000087	true		
b9c5ebbd0f672a3	b5156a492f2838f	FB000051	true		
c9c3a16835a0d48	b5156a492f2838f	FB000127	true		
5f7323cc4f01fc4	60e8137cd105aac	FB000022	true		
9fa107fac82a9ea	60e8137cd105aac	FB000096	true		
5bf198749441a25	60e8137cd105aac	FB000133	true		
d163600293a177f	60e8137cd105aac	FB000142	true		
3cdb5bca4cfe736	60e8137cd105aac	FB000148	true		
72f0f065cbec2a5	60e8137cd105aac	FB000155	true		
e1a1fa88bf49cff	60e8137cd105aac	FB000001	Masak Pizza		
80979cac9f88e5f	60e8137cd105aac	FB000005	1		
043430651324d93	60e8137cd105aac	FB000011	300		
7553ea2d961af61	60e8137cd105aac	FB000045	Pizza dough||Pepperoni||Saus bolognese||Mozzarella	50||500||50||100	
d67af5f0551ef17	8aadf546dcb410a	FB000025	true		
9d6063008096218	8aadf546dcb410a	FB000123	true		
365d7fb3ae90051	8aadf546dcb410a	FB000131	true		
9209a7626f59a7a	8aadf546dcb410a	FB000137	true		
d7f8c953a1a6006	8aadf546dcb410a	FB000144	true		
af77e34bcbb045a	8aadf546dcb410a	FB000151	true		
9e9838f227cb64c	8aadf546dcb410a	FB000157	true		
1404a0552ed55ce	8aadf546dcb410a	FB000003	123		
a83b8a85dfb8be2	8aadf546dcb410a	FB000009	123		
c09afe2fe1b0374	d3fee1dc2f2ea5a	FB000131	true		
78c57eaec6ecb42	d3fee1dc2f2ea5a	FB000135	true		
e3f240a1b827baa	d3fee1dc2f2ea5a	FB000139	true		
c0576778c80084b	d3fee1dc2f2ea5a	FB000144	true		
b2a7893f5d3b1df	d3fee1dc2f2ea5a	FB000148	true		
c7153104f2b29c0	d3fee1dc2f2ea5a	FB000153	true		
85f5e7c9d3759c1	d3fee1dc2f2ea5a	FB000157	true		
bc0f334c7b8ea17	d3fee1dc2f2ea5a	FB000001	asdfa		
dfd1038d6a8cd5a	d3fee1dc2f2ea5a	FB000004	asdf		
f225bab9ee42894	d3fee1dc2f2ea5a	FB000009	asdf		
ba0db2140734cce	d3fee1dc2f2ea5a	FB000011	23		
85e3a2742156d61	9f11942b3d2ffc8	FB000133	true		
279e626b03b4b3a	9f11942b3d2ffc8	FB000137	true		
a4dbfd6460bcb16	9f11942b3d2ffc8	FB000142	true		
27cf89c47935599	9f11942b3d2ffc8	FB000146	true		
b0382f23f91f2e9	9f11942b3d2ffc8	FB000151	true		
15d2a658bda759a	9f11942b3d2ffc8	FB000155	true		
4d7862ed59e901e	9f11942b3d2ffc8	FB000159	true		
bf7117f2a480f1f	9f11942b3d2ffc8	FB000003	asdf		
b4c1c8a9ab209af	9f11942b3d2ffc8	FB000005	asdf		
ca4a09f2c80894c	9f11942b3d2ffc8	FB000010	234		
6b42169b2685988	b5156a492f2838f	FB000139	true		
6913abdf98a8a2a	8b6609172fd12fc	FB000139	true		
116dbf9cd135f49	9462387ae8d3621	FB000073	true		
e4eee90927c55cb	dda352919cf81b9	FB000151	true		
2bb970a0f260474	69a7b900708685c	FB000133	true		
23e94f409df2eab	fc322658e7cb29c	FB000131	true		
579de197c14e66d	fc322658e7cb29c	FB000133	true		
8f4299bb5a481b4	fc322658e7cb29c	FB000135	true		
7ed670f530d50f6	fc322658e7cb29c	FB000137	true		
37e5274b0ddb043	fc322658e7cb29c	FB000139	true		
d403ac0eee0d929	fc322658e7cb29c	FB000142	true		
d2a9de580fd857b	fc322658e7cb29c	FB000144	true		
fa3a42411c2a5f0	fc322658e7cb29c	FB000146	true		
2d98933b16b1c2f	fc322658e7cb29c	FB000148	true		
8c9af6f9ae6780d	fc322658e7cb29c	FB000151	true		
8c343bcc1eaea72	fc322658e7cb29c	FB000153	true		
e93866e225409f6	fc322658e7cb29c	FB000155	true		
29ecf9226384970	fc322658e7cb29c	FB000157	true		
02bc7545ae18e14	fc322658e7cb29c	FB000159	true		
f090c128794177c	fc322658e7cb29c	FB000001	asdf asdfasdf		
180fe997185f1d5	fc322658e7cb29c	FB000003	123		
782f667a4865dfe	fc322658e7cb29c	FB000004	123		
6277d364fde0976	fc322658e7cb29c	FB000005	123		
58c0ae8945da3f0	fc322658e7cb29c	FB000009	123		
07ec5f3c7dfa2f9	fc322658e7cb29c	FB000010	123		
0960fc5b94aee3a	fc322658e7cb29c	FB000011	123		
53d5c27916b2fb0	69a7b900708685c	FB000003	qwer		
9de68c8368a3831	af8b00d596b2ead	FB000038	true		
abc567d1126f9c6	ee5f00d62b72cc4	FB000153	true		
97da7d83f4719c3	af8b00d596b2ead	FB000148	true		
0f6e94abd8dc455	af8b00d596b2ead	FB000044	bubut	1	
676dd0a2f58f353	833c802892df8e4	FB000124	true		
70cb9ab920b4f42	833c802892df8e4	FB000144	true		
016202507ada220	833c802892df8e4	FB000159	true		
7a1af105299f9ff	833c802892df8e4	FB000011	123		
b41defba514a1d0	d7c54a5b9abad62	FB000131	true		
efb1cd5432948c3	d7c54a5b9abad62	FB000004	asdf		
cad4dbd72c4618a	4d65aee4d77f1ac	FB000137	true		
2d419cedb85c490	4d65aee4d77f1ac	FB000153	true		
65451d505901681	4d65aee4d77f1ac	FB000005	asdf		
440e2268e9f5bd5	9462387ae8d3621	FB000188	asdf fdfdsa		
ed48a48268bd6e2	9462387ae8d3621	FB000001	fdasdf		
ef7a868d4047802	5863d9a6b1cc3c0	FB000144	true		
c75bdd595a4abca	5863d9a6b1cc3c0	FB000157	true		
e0b1937befb14c1	5863d9a6b1cc3c0	FB000009	13		
72f0fbf811bb17f	018e7c52f853790	FB000020	true		
1692dba7c2686cc	018e7c52f853790	FB000025	true		
2bf878a945955d5	018e7c52f853790	FB000033	true		
3e911a939fd76d3	018e7c52f853790	FB000042	apa ya		
94fdb753184661b	018e7c52f853790	FB000072	true		
d16dc44c1834a39	018e7c52f853790	FB000077	true		
3b6b72cb316e9c1	018e7c52f853790	FB000085	true		
92e30581fd72738	018e7c52f853790	FB000091	true		
48693f4c1d552a0	018e7c52f853790	FB000099	true		
e5fc8af06eb3b11	018e7c52f853790	FB000107	true		
3a8111920c8d277	018e7c52f853790	FB000125	true		
7cf5fec1e522ff8	0b2423cc8bd003e	FB000133	true		
6bcb23fd308839f	0b2423cc8bd003e	FB000001	Manjat Tower		
81c03f74cd4616c	cb93caf3102bb4e	FB000022	true		
a49fe2b7e329a29	cb93caf3102bb4e	FB000034	true		
515416ba1980c17	cb93caf3102bb4e	FB000070	true		
27298e619a3f19b	cb93caf3102bb4e	FB000077	true		
4dbd9721ac9fccb	cb93caf3102bb4e	FB000086	true		
3e438c414b501c7	cb93caf3102bb4e	FB000096	true		
ad73bc65c167346	cb93caf3102bb4e	FB000104	true		
87f788492d84448	cb93caf3102bb4e	FB000124	true		
af8069498fc8213	cb93caf3102bb4e	FB000133	true		
85d801bffa75181	cb93caf3102bb4e	FB000148	true		
cdc3acaf0ee0251	cb93caf3102bb4e	FB000003	Gedung Baru Inalum		
d6b6cd59c0a518c	cb93caf3102bb4e	FB000044	mesin||mesin 2||mesin 33	1||22||34	
4880eb8fc8e6025	1db69953125e16b	FB000135	true		
c96bf38714a7cfd	1db69953125e16b	FB000148	true		
081a028fe0dd867	1db69953125e16b	FB000001	asdfasdf		
7a7f634ca3abac9	1db69953125e16b	FB000011	14		
c3e1cddcda5c0c2	516f43df8a5743f	FB000137	true		
b81fe4cab1eaa0c	516f43df8a5743f	FB000148	true		
39285169faa2c42	516f43df8a5743f	FB000004	asdf		
0fee1988a993ecf	018e7c52f853790	FB000133	true		
8341af658b529df	018e7c52f853790	FB000144	true		
95c5e63cc5a3f3d	018e7c52f853790	FB000155	true		
0157507c43b577a	018e7c52f853790	FB000004	Pabrik		
4fa29571390d555	018e7c52f853790	FB000043	masker	1	
c5861019117e3e1	60e8137cd105aac	FB000034	true		
fb5a4d240b83195	60e8137cd105aac	FB000123	true		
8a172c9ac6a7390	60e8137cd105aac	FB000135	true		
f346796ed29b226	60e8137cd105aac	FB000144	true		
9a2f8bdc17fb14b	60e8137cd105aac	FB000151	true		
eb4dbd9544bcabd	60e8137cd105aac	FB000157	true		
d1ad82ea10cd1a0	60e8137cd105aac	FB000003	Dapur Inalum		
0c38a2ee65980f2	60e8137cd105aac	FB000009	Nazwa Bakery		
84363c8faad560c	60e8137cd105aac	FB000043	Pisau||Piring||Loyang	1||50||3	
752bba05c687702	8aadf546dcb410a	FB000020	true		
da3b4764025765b	8aadf546dcb410a	FB000069	true		
1fd8c53c07d51b3	8aadf546dcb410a	FB000124	true		
b550a756e03765c	8aadf546dcb410a	FB000133	true		
b5da10e551e584b	8aadf546dcb410a	FB000139	true		
1a3f6cbc8b9570d	8aadf546dcb410a	FB000146	true		
1f6a45d6e6f2e29	8aadf546dcb410a	FB000153	true		
c1e34ff52f11ab8	8aadf546dcb410a	FB000159	true		
11af1f25fa319af	8aadf546dcb410a	FB000004	123		
0c8b7583f3c45bd	8aadf546dcb410a	FB000010	123		
3d18830e247d737	4f2fbccd8fe180e	FB000131	true		
4e91a7dedd2f46f	4f2fbccd8fe180e	FB000133	true		
e39a7f269b42a89	4f2fbccd8fe180e	FB000135	true		
6907b2e2b71fcf6	4f2fbccd8fe180e	FB000137	true		
1d24ffefa24e9dc	4f2fbccd8fe180e	FB000139	true		
8646fe08338bb48	4f2fbccd8fe180e	FB000142	true		
2ed5b0d25c86c56	4f2fbccd8fe180e	FB000144	true		
55bd097cabc535d	4f2fbccd8fe180e	FB000146	true		
ba8728159c9b0aa	4f2fbccd8fe180e	FB000148	true		
e44137ed046e9de	4f2fbccd8fe180e	FB000151	true		
6cf0b26017d763a	4f2fbccd8fe180e	FB000153	true		
7433fba23f88513	4f2fbccd8fe180e	FB000155	true		
fdbec8f4f1603e5	4f2fbccd8fe180e	FB000157	true		
14209d713ad17a8	4f2fbccd8fe180e	FB000159	true		
b57c035a7c693d6	4f2fbccd8fe180e	FB000001	asdf		
14ffa23fc4457b0	4f2fbccd8fe180e	FB000003	asdf		
2a6bcaacc7b8818	4f2fbccd8fe180e	FB000004	asdf		
d8441a43f53a209	4f2fbccd8fe180e	FB000005	asdf		
2ceb5c2e166b5dc	4f2fbccd8fe180e	FB000009	asdf		
edc00a7c51bc9b0	4f2fbccd8fe180e	FB000010	asdf		
e61998dcfc94ed1	4f2fbccd8fe180e	FB000011	134		
08f267faae1e406	d9e06f529132f2f	FB000131	true		
be0e8525400be7c	d9e06f529132f2f	FB000133	true		
a7645044470606f	d9e06f529132f2f	FB000135	true		
3c267119b820448	d9e06f529132f2f	FB000137	true		
76c682cbc0f26d1	d9e06f529132f2f	FB000139	true		
0f9c3a02fd28f94	d9e06f529132f2f	FB000142	true		
92f122983925753	d9e06f529132f2f	FB000144	true		
7cf26224c5b49c1	d9e06f529132f2f	FB000146	true		
2912c92270d546b	d9e06f529132f2f	FB000148	true		
2779549ac503636	d9e06f529132f2f	FB000151	true		
db17d3199a6ea4f	d9e06f529132f2f	FB000153	true		
9d8010b3b9eb91b	d9e06f529132f2f	FB000155	true		
7c8c4112dfd9e13	d9e06f529132f2f	FB000157	true		
88350fef026995d	d9e06f529132f2f	FB000159	true		
7e38690f238be8e	d9e06f529132f2f	FB000001	asdf		
7d67a244284d377	d9e06f529132f2f	FB000003	sdf		
8acc2bdf8d56a68	d9e06f529132f2f	FB000004	asdf		
2a8c199195d6712	d9e06f529132f2f	FB000005	asdf		
cf010cfdad146d9	d9e06f529132f2f	FB000009	asdf		
9d1cdd548b836dd	d9e06f529132f2f	FB000010	asdf		
6e5705bfe4c5b26	d9e06f529132f2f	FB000011	234		
e2c6d57111d0dc2	a7ea3555954abf0	FB000131	true		
8019b2ebf9898ad	a7ea3555954abf0	FB000133	true		
e4f7ec01abc6401	a7ea3555954abf0	FB000135	true		
ad15e5c89b7b464	a7ea3555954abf0	FB000137	true		
9bab74549dc46ca	a7ea3555954abf0	FB000139	true		
151014d28e93a71	a7ea3555954abf0	FB000142	true		
10b8fdfa95a63d7	a7ea3555954abf0	FB000144	true		
658b409f11cce83	a7ea3555954abf0	FB000146	true		
e23c52a2facf332	a7ea3555954abf0	FB000148	true		
4804afed92bab86	a7ea3555954abf0	FB000151	true		
e1f7aa13a3162fe	a7ea3555954abf0	FB000153	true		
86de9254373c576	a7ea3555954abf0	FB000155	true		
5a55d065a4a1c15	a7ea3555954abf0	FB000157	true		
ddf296b24e75944	a7ea3555954abf0	FB000159	true		
73c95d8345e72bb	a7ea3555954abf0	FB000001	asdf		
258fa19d27f7b44	a7ea3555954abf0	FB000003	sdf		
f98f2ad563938e4	a7ea3555954abf0	FB000004	asdf		
583c74525b0e60e	a7ea3555954abf0	FB000005	asdf		
a1d896a2bef7009	a7ea3555954abf0	FB000009	asdf		
36d177fa1281aae	a7ea3555954abf0	FB000010	asdf		
d84ff5ed27fdf0a	a7ea3555954abf0	FB000011	234		
926c15e7433c563	e20ea5469778607	FB000131	true		
3c15def3ff64526	e20ea5469778607	FB000133	true		
4d80dd46c09518a	e20ea5469778607	FB000135	true		
2f7826da39a7ee1	e20ea5469778607	FB000137	true		
146aec3b315c242	e20ea5469778607	FB000139	true		
fefda2770a32053	e20ea5469778607	FB000142	true		
62a34dd74922bcd	e20ea5469778607	FB000144	true		
c9f1f22d53a618d	e20ea5469778607	FB000146	true		
e730ea3831140fb	e20ea5469778607	FB000148	true		
dbf42bdd845f849	e20ea5469778607	FB000151	true		
f5c16cd2e243621	e20ea5469778607	FB000153	true		
0f82117f4c4f4c6	e20ea5469778607	FB000155	true		
8c838ede2125273	e20ea5469778607	FB000157	true		
ca80266c30c0b63	e20ea5469778607	FB000159	true		
fb8dd9d694a0386	e20ea5469778607	FB000001	asdf		
437996a778f1148	e20ea5469778607	FB000003	asdf		
ce679fd39f2b00a	e20ea5469778607	FB000004	asdf		
fb9432770354247	e20ea5469778607	FB000005	234		
bccdbf9946cafbd	e20ea5469778607	FB000009	234		
6d9d98f10137316	e20ea5469778607	FB000010	234		
5b17f27b1ca24d4	e20ea5469778607	FB000011	234		
f2d0ac3d20fe0ab	53a913b17aa7190	FB000131	true		
21f220b2e08ecd7	53a913b17aa7190	FB000133	true		
d5b4cd1477f6e15	53a913b17aa7190	FB000135	true		
70f9eeffabe790e	53a913b17aa7190	FB000137	true		
df74630b961ea85	53a913b17aa7190	FB000139	true		
3df7bc041d66ab2	53a913b17aa7190	FB000142	true		
b5e97a8e70d7442	53a913b17aa7190	FB000144	true		
c91ea2f4ef874e3	53a913b17aa7190	FB000146	true		
51a8bd80127162d	53a913b17aa7190	FB000148	true		
8f87b5ea8cfe18e	53a913b17aa7190	FB000151	true		
de0ced36c4a5b1e	53a913b17aa7190	FB000153	true		
90e4440b7dc4afa	53a913b17aa7190	FB000155	true		
8991cafd7cd7b8b	53a913b17aa7190	FB000157	true		
6ad2f3372f944e1	53a913b17aa7190	FB000159	true		
2e5d6e88db15b74	53a913b17aa7190	FB000001	asdf		
a5728434b34d9f4	53a913b17aa7190	FB000006	asdf		
03928506d169447	53a913b17aa7190	FB000007	asdf		
3869eb6bffeadd0	53a913b17aa7190	FB000009	sdf		
c0424a14e7964df	53a913b17aa7190	FB000010	sdf		
f980417d5872e86	53a913b17aa7190	FB000011	234		
3a55b9c32dc89f2	53a913b17aa7190	FB000012	asdf		
3687d311a0447c2	53a913b17aa7190	FB000013	asdf		
676dca96cfe7d19	53a913b17aa7190	FB000014	asdf		
583509f23c09664	53a913b17aa7190	FB000015	asdf		
ba82e11b56a1f36	53a913b17aa7190	FB000016	asdf		
8f6b306d15461ea	53a913b17aa7190	FB000017	asdf		
ea9f183843e01aa	53a913b17aa7190	FB000018	2023-01-24		
d2a4bf1d6ad0604	53a913b17aa7190	FB000019	12:00		
30842bda3ae6ba6	c91d2c29b9f194e	FB000072	true		
d9724974bef230a	c91d2c29b9f194e	FB000188	asdfasd asdf		
8709519ac36546c	c91d2c29b9f194e	FB000155	true		
addce9ed8dfa5f9	f82dae290502e70	FB000146	true		
73ccededa3f2799	f82dae290502e70	FB000009	12		
27c0f0430efbacf	f82dae290502e70	FB000019	12:00		
60448c446ff81ea	6fdb8baf0bac546	FB000091	true		
1a8224683029e2b	6fdb8baf0bac546	FB000137	true		
b9942f6cec8ae3b	6fdb8baf0bac546	FB000159	true		
a1edcf1505b3c65	6fdb8baf0bac546	FB000015	2e4rerfg		
ffaf18449378189	6e798c129a380f0	FB000038	true		
03865a8be063f3d	6e798c129a380f0	FB000137	true		
da716f95c2640d9	6e798c129a380f0	FB000159	true		
7e68df5a94fba71	6e798c129a380f0	FB000015	asdf		
785a77c8fd29df5	7cb96acccc53861	FB000069	true		
a0d159b9c2b2ff6	7cb96acccc53861	FB000133	true		
05906ab4d8df51f	7cb96acccc53861	FB000155	true		
552c01d4bebb418	7cb96acccc53861	FB000013	sdfsdf		
66ac0dfe8ba5d00	d7c54a5b9abad62	FB000133	true		
102ac3818597eb9	d7c54a5b9abad62	FB000005	asdf		
3a2c11c7fa68066	eb63f2951d3241c	FB000052	true		
639002d5752f361	eb63f2951d3241c	FB000139	true		
e4b863b6b734a5e	034cce884cd7d6c	FB000131	true		
2e3946988b53162	034cce884cd7d6c	FB000133	true		
c3b377b7493255b	034cce884cd7d6c	FB000135	true		
046d7213b2b5544	034cce884cd7d6c	FB000137	true		
8fbabe485b9aec3	034cce884cd7d6c	FB000139	true		
f893749d58f1d4f	034cce884cd7d6c	FB000142	true		
f26892bd4eadd2c	034cce884cd7d6c	FB000144	true		
aeb0dc982c235cd	034cce884cd7d6c	FB000146	true		
22a6f8a2ad4476f	034cce884cd7d6c	FB000148	true		
f08e9231f093da7	034cce884cd7d6c	FB000151	true		
4247450717bef03	034cce884cd7d6c	FB000153	true		
016c2867e09bd0a	034cce884cd7d6c	FB000155	true		
5c64aa55d8fdbf3	034cce884cd7d6c	FB000157	true		
8f27721bfd5e45c	034cce884cd7d6c	FB000159	true		
9b8070529fe183b	034cce884cd7d6c	FB000001	asdf		
c4d7b18ba7d67b2	034cce884cd7d6c	FB000003	asdf		
6d136b9d5631450	034cce884cd7d6c	FB000004	asdf		
b9963aa4146ed60	034cce884cd7d6c	FB000005	asdf		
c76684fc874f41e	034cce884cd7d6c	FB000009	asdf		
d9646a84519e8a2	034cce884cd7d6c	FB000010	asdf		
e7d75d908d440f9	034cce884cd7d6c	FB000011	234		
882effc4c5d9528	034cce884cd7d6c	FB000065	true		
d74103f69b23e9d	034cce884cd7d6c	FB000067	false		
e54ea96adedb55e	dda352919cf81b9	FB000153	true		
91ba865d6646495	69a7b900708685c	FB000135	true		
30ccbdfd4a1239b	69a7b900708685c	FB000004	qwer		
6798214180ebe84	45e1a224d677912	FB000034	true		
3ae313eefba2a3c	45e1a224d677912	FB000108	true		
af40d24c0df9209	45e1a224d677912	FB000137	true		
2de33af9d25b8cf	833c802892df8e4	FB000020	true		
f79846cd6382afc	833c802892df8e4	FB000131	true		
4ddc79deec9c523	833c802892df8e4	FB000146	true		
84a9ba964762cb6	833c802892df8e4	FB000001	asdf		
18ca6cd25b0402c	833c802892df8e4	FB000043	asdf	134	
ceeb9294347cd61	45e1a224d677912	FB000157	true		
5e42cc141b8c8dc	45e1a224d677912	FB000043	test||testttt||tesr	123||13423||432	
adbed7b3fbe88c7	af8b00d596b2ead	FB000068	true		
833ac9f9a4c1ea4	ee5f00d62b72cc4	FB000155	true		
a2a39110a3a5026	af8b00d596b2ead	FB000151	true		
9cf5dc5c91d23af	cc5ef893d60564e	FB000131	true		
1e1e92f91092086	4d65aee4d77f1ac	FB000139	true		
7d7ba4961882dc7	4d65aee4d77f1ac	FB000155	true		
ac5a95637ed4d86	4d65aee4d77f1ac	FB000009	asdf		
1d2e3e577defa4a	9462387ae8d3621	FB000131	true		
2efca8def1daa07	9462387ae8d3621	FB000003	fdfd 		
f9ca4b862996f22	0b2423cc8bd003e	FB000135	true		
14d8f305198aafc	eb63f2951d3241c	FB000001	asdfasdf		
822cf724c5eac76	d18e67b456f8250	FB000041	true		
424bde3b86ca8f2	17eaf519e90a861	FB000135	true		
9a0c49d9d3157b3	17eaf519e90a861	FB000151	true		
06b5263a03f27b5	17eaf519e90a861	FB000004	asdf		
420ce8292eb7eb8	5863d9a6b1cc3c0	FB000131	true		
d0871f8708ec633	5863d9a6b1cc3c0	FB000146	true		
032d87dc84e19a1	5863d9a6b1cc3c0	FB000159	true		
d4ba3d6123375a5	5863d9a6b1cc3c0	FB000010	234		
1180b0928b7769f	018e7c52f853790	FB000021	true		
770504626c62c1a	018e7c52f853790	FB000026	true		
85149e4c6e0a715	018e7c52f853790	FB000034	true		
0bb1b38ad56d1ff	018e7c52f853790	FB000068	true		
66dd7bdb81c15c2	018e7c52f853790	FB000073	true		
966bf745fda088f	018e7c52f853790	FB000079	true		
f93fd7dcebce201	018e7c52f853790	FB000086	true		
60185dd39f7eeb9	018e7c52f853790	FB000092	true		
ea603f469b70f47	018e7c52f853790	FB000101	true		
760e8b5097e167c	018e7c52f853790	FB000108	true		
37804cdc9524985	018e7c52f853790	FB000126	true		
e79410da89956fc	018e7c52f853790	FB000135	true		
98eeef7bb0fc36c	018e7c52f853790	FB000146	true		
c3b2077c7029ad2	018e7c52f853790	FB000157	true		
f046b1927600147	018e7c52f853790	FB000005	Mawar		
f41c1c3e540d920	018e7c52f853790	FB000044	bor	2	
875e10a612b0a78	45e1a224d677912	FB000042	ahahahah		
b36d4fc28779a65	45e1a224d677912	FB000124	true		
f21cb7d51f5156b	45e1a224d677912	FB000139	true		
57366b638faacd0	45e1a224d677912	FB000159	true		
ad119237a9933a7	45e1a224d677912	FB000044	fsdf	234	
deaeea73b18b2ce	dda352919cf81b9	FB000155	true		
c5a6e37e24a6e49	af8b00d596b2ead	FB000072	true		
33ecdda1edb16f1	69a7b900708685c	FB000137	true		
7745095b6fe4537	69a7b900708685c	FB000005	qwer		
a4508cd9e4979da	ee5f00d62b72cc4	FB000157	true		
ea1ef06368ca919	af8b00d596b2ead	FB000153	true		
a9786652744aff7	cc5ef893d60564e	FB000133	true		
690c5c52d5e7f9e	833c802892df8e4	FB000021	true		
c5535e0868f953b	833c802892df8e4	FB000133	true		
ede1b041e2c2b55	833c802892df8e4	FB000148	true		
00cc809cd3d6a61	833c802892df8e4	FB000003	34		
3149375d56ac241	b5156a492f2838f	FB000052	true		
91a32f52171893f	8b6609172fd12fc	FB000020	true		
535517ba3658562	8b6609172fd12fc	FB000071	true		
c5fb0015eae6ba9	8b6609172fd12fc	FB000096	true		
c56bed0bf45b39e	8b6609172fd12fc	FB000142	true		
e7970b13f67d032	4d65aee4d77f1ac	FB000142	true		
67cf3a2073e7eb9	4d65aee4d77f1ac	FB000157	true		
fb76cd33e76e35e	4d65aee4d77f1ac	FB000010	asdf		
8dcfa9f353d73bc	d7c54a5b9abad62	FB000135	true		
9b5844ecbfd229c	d7c54a5b9abad62	FB000009	asdf		
63d0edc3c9c01ff	9462387ae8d3621	FB000133	true		
5fbec216d8759da	5863d9a6b1cc3c0	FB000133	true		
0d6321f283fd9e8	5863d9a6b1cc3c0	FB000148	true		
3d3fce55e7179eb	5863d9a6b1cc3c0	FB000001	asdf		
95283b3994264d5	5863d9a6b1cc3c0	FB000011	234		
aa1edb46306c748	018e7c52f853790	FB000022	true		
16d2f371f140e2d	018e7c52f853790	FB000027	true		
deca2db57e91bf6	018e7c52f853790	FB000038	true		
833b678a653d8e4	018e7c52f853790	FB000069	true		
7cc4931f09cf3e8	018e7c52f853790	FB000074	true		
377004b616ec21c	018e7c52f853790	FB000080	true		
cda465d24541b69	018e7c52f853790	FB000087	true		
2bc0746c4d7431f	018e7c52f853790	FB000096	true		
f7e179e50966764	018e7c52f853790	FB000102	true		
04e26cd5211901b	018e7c52f853790	FB000109	true		
880ff91c6008428	018e7c52f853790	FB000127	true		
d08524c8408653b	018e7c52f853790	FB000137	true		
027ea911ef459be	018e7c52f853790	FB000148	true		
a1049022e005a75	018e7c52f853790	FB000159	true		
0038134ea8311a3	018e7c52f853790	FB000009	Berca		
e85b1009c074d7f	018e7c52f853790	FB000045	apd	1	
623fc56c1099f8b	60e8137cd105aac	FB000068	true		
0a748cc0aea996c	60e8137cd105aac	FB000127	true		
4da2be9919e3725	60e8137cd105aac	FB000137	true		
a9648d89f33997b	60e8137cd105aac	FB000146	true		
e71e8cd16c19eb2	60e8137cd105aac	FB000153	true		
7510f03f33bfc8d	60e8137cd105aac	FB000159	true		
186c2fdd967c8ab	60e8137cd105aac	FB000004	Kitchen		
3eb663f3935735e	60e8137cd105aac	FB000010	Bagaz Albar		
5f915016b910339	60e8137cd105aac	FB000044	Oven	3	
fcc329551836ee8	8aadf546dcb410a	FB000021	true		
d0c9f0516e88d92	8aadf546dcb410a	FB000075	true		
ac3322949b1556d	8aadf546dcb410a	FB000125	true		
645da814551c0b4	8aadf546dcb410a	FB000135	true		
389b7581f902750	8aadf546dcb410a	FB000142	true		
9d9f5d078b428c0	8aadf546dcb410a	FB000148	true		
229752af00708be	8aadf546dcb410a	FB000155	true		
510f10e7f56a2de	8aadf546dcb410a	FB000001	test		
6db85b6d7a8a951	8aadf546dcb410a	FB000005	123		
d5fe07d10ea8088	8aadf546dcb410a	FB000011	123		
d9d90a814b60210	d3fee1dc2f2ea5a	FB000133	true		
166a4f942e2ffc9	d3fee1dc2f2ea5a	FB000137	true		
a992ddbec40e47a	d3fee1dc2f2ea5a	FB000142	true		
61f5665bfee8287	d3fee1dc2f2ea5a	FB000146	true		
3ec1d421ab8fee7	d3fee1dc2f2ea5a	FB000151	true		
b01ac726ea57f6d	d3fee1dc2f2ea5a	FB000155	true		
ae8fbcc3d20561f	d3fee1dc2f2ea5a	FB000159	true		
47366bb07bee272	d3fee1dc2f2ea5a	FB000003	asdf		
dee809919e149a5	d3fee1dc2f2ea5a	FB000005	asdf		
ec322955dc1eb81	d3fee1dc2f2ea5a	FB000010	asdf		
fee6bdc54a62074	9f11942b3d2ffc8	FB000131	true		
221c2a996f4ef27	9f11942b3d2ffc8	FB000135	true		
84545898ca79f93	9f11942b3d2ffc8	FB000139	true		
b39718622b845ed	9f11942b3d2ffc8	FB000144	true		
c00a8e0e75a4dc9	9f11942b3d2ffc8	FB000148	true		
c33e526f4e3fd2b	9f11942b3d2ffc8	FB000153	true		
99c6eb3050e2ed7	9f11942b3d2ffc8	FB000157	true		
5a3800c5f1d0125	9f11942b3d2ffc8	FB000001	asdf		
a21c0b319d6f5ed	9f11942b3d2ffc8	FB000004	asdf		
86e2ab8206ce844	9f11942b3d2ffc8	FB000009	234		
ba79cc710e6f32a	9f11942b3d2ffc8	FB000011	234		
2ae7b1eed930ad5	dda352919cf81b9	FB000157	true		
fd0f8863a87e009	69a7b900708685c	FB000139	true		
5f951228268ed8a	69a7b900708685c	FB000009	qwer		
2821e519b7b2a38	ee5f00d62b72cc4	FB000093	bva		
3ece27c1eb51b80	ee5f00d62b72cc4	FB000159	true		
aec1f98b5cb9b52	af8b00d596b2ead	FB000077	true		
fe41efb20a6a94a	b5156a492f2838f	FB000068	true		
fa82b98519af048	b5156a492f2838f	FB000128	true		
0c7c5fa1d1f7761	b5156a492f2838f	FB000142	true		
4d8d1d0aeaf322d	b5156a492f2838f	FB000155	true		
701f477cb47a1e1	b5156a492f2838f	FB000004	Gedung Baru Inalum		
e9d060e8514a028	b5156a492f2838f	FB000011	4		
5470cd74279ab85	af8b00d596b2ead	FB000155	true		
723c66c818dd37e	cc5ef893d60564e	FB000135	true		
054a3bdbd6ab58a	cc5ef893d60564e	FB000157	true		
f0f3527d5070c91	8b6609172fd12fc	FB000021	true		
cbfb5d2fd70dec0	8b6609172fd12fc	FB000072	true		
a541b6e36dc35a2	8b6609172fd12fc	FB000097	true		
08abef09cea000b	8b6609172fd12fc	FB000144	true		
86e3b65704ed877	8b6609172fd12fc	FB000003	1342		
3eb701b8b16e8d9	8b6609172fd12fc	FB000046	asdfw	413	
c28c3c13c224211	c91d2c29b9f194e	FB000077	true		
176214b7a4233dd	c91d2c29b9f194e	FB000131	true		
08a78cc203d9a2f	c91d2c29b9f194e	FB000157	true		
0663f89f2820f9e	c91d2c29b9f194e	FB000045	asdfasdf 	2452	
1fc07658cb861f1	f82dae290502e70	FB000148	true		
7465a82089d97d9	f82dae290502e70	FB000010	34		
cd3360d6600c048	b54665cb812e987	FB000135	true		
b3f1eac471392d2	6fdb8baf0bac546	FB000025	true		
82c1230d7c71447	6fdb8baf0bac546	FB000092	true		
b67a3e0ec9a37c6	6fdb8baf0bac546	FB000139	true		
5f0587d720d1b4d	45e1a224d677912	FB000069	true		
9b25e5fb44e3d5f	45e1a224d677912	FB000126	true		
c13a0ba35ca92c4	45e1a224d677912	FB000142	true		
c44d14a37903d27	45e1a224d677912	FB000001	asdf		
877bc37f6a81cbd	45e1a224d677912	FB000045	sdfsd||sdfs	234||234	
52cce355abce090	b54665cb812e987	FB000151	true		
40707c7ab1280a9	b54665cb812e987	FB000004	sdf		
5d6dd414c9c3abb	0240fe6e0754b07	FB000083	fasd		
45af44555c8ef89	6fdb8baf0bac546	FB000001	deskr		
33c40688a7c331b	6fdb8baf0bac546	FB000016	fgefgerg rg erg e		
06d8cb2c74d4c14	0240fe6e0754b07	FB000133	true		
847ebfdcf2191cb	0240fe6e0754b07	FB000148	true		
ec7a9449d04d27d	0240fe6e0754b07	FB000003	fda		
f3a73815cbc4405	0240fe6e0754b07	FB000044	dfgh	463	
41eddb2585d4965	6e798c129a380f0	FB000039	true		
1e04854c1de3b95	6e798c129a380f0	FB000139	true		
dd8f020e8c28627	6e798c129a380f0	FB000001	asdf 345		
ff04697058e18e5	6e798c129a380f0	FB000016	asdf		
3849ef7f7fc389a	7cb96acccc53861	FB000075	true		
c1ebd13089538f3	7cb96acccc53861	FB000135	true		
3c069d49c231cee	7cb96acccc53861	FB000157	true		
b3c9dd753192b0e	9374709c447b63e	FB000135	true		
d6e7376f8540244	9374709c447b63e	FB000144	true		
ce03f869dd1b0b5	9374709c447b63e	FB000153	true		
ee9d1dd63c5a337	9374709c447b63e	FB000001	asdf 123		
73ad40f07bcec7a	9374709c447b63e	FB000009	1345		
909c95d1b150eb5	7cb96acccc53861	FB000014	sdfsdf		
afea0a391dde3c7	d7c54a5b9abad62	FB000137	true		
74ca83689081e42	d7c54a5b9abad62	FB000010	asdf		
afaac84f4a008ec	1c84142c16881cc	FB000028	true		
6fc7cd5b2664eb2	1c84142c16881cc	FB000049	true		
a7f0900c405e6ea	1c84142c16881cc	FB000090	true		
1f44d00aef61bc4	1c84142c16881cc	FB000133	true		
1bde00ff5d9fbbf	1c84142c16881cc	FB000146	true		
50846854121b973	1c84142c16881cc	FB000159	true		
dc0179df04cca4b	1c84142c16881cc	FB000010	sdfsdf sdfsdf asdf asdfasdf awdf		
e99b4a1bef39f03	d57a36c60639b07	FB000137	true		
79945e2c9010832	d57a36c60639b07	FB000157	true		
3c3ad3bb0c3eb65	eb63f2951d3241c	FB000092	true		
7bcde981fd876da	eb63f2951d3241c	FB000142	true		
ef42a1e02f184d2	9462387ae8d3621	FB000135	true		
d7bb708c069a7ae	9462387ae8d3621	FB000004	fdfsdf		
ef2b981a7a69db2	0b2423cc8bd003e	FB000054	true		
9103aefacb81a31	0b2423cc8bd003e	FB000137	true		
2008f8e717ec120	17eaf519e90a861	FB000137	true		
e8a0e4b93097d99	17eaf519e90a861	FB000153	true		
917824161785179	eb63f2951d3241c	FB000003	fdfasdf		
154d38788e797ab	17eaf519e90a861	FB000005	asdf		
61ae6fe6dc2befa	d18e67b456f8250	FB000047	true		
301344c2a06a79d	3aa7a14111037bd	FB000068	true		
44f1e4b58b6aa16	3aa7a14111037bd	FB000127	true		
20c62ee07ffb8c1	3aa7a14111037bd	FB000137	true		
7631daa5f8488a3	3aa7a14111037bd	FB000148	true		
fa1fc8497d29083	3aa7a14111037bd	FB000159	true		
b70a0c6e74a427d	3aa7a14111037bd	FB000009	PT. Berca Hardayaperkasa		
b9bcc72d304acab	3aa7a14111037bd	FB000065	true		
aba3f931d9e8c33	56e801ace315645	FB000137	true		
b0867a7543898a5	56e801ace315645	FB000151	true		
bd5dd69ea71ffeb	56e801ace315645	FB000006	asdf		
1dcfbc785cb5c48	56e801ace315645	FB000013	134		
55284490401d48b	38e8f73d4bb470e	FB000039	true		
eef8728dbe71701	38e8f73d4bb470e	FB000135	true		
b28e1741af600d8	38e8f73d4bb470e	FB000148	true		
df851c621cc0c53	38e8f73d4bb470e	FB000001	Tambah peralatan-peralatan baru untuk ruangan Gym		
f3a272e43fdfb13	38e8f73d4bb470e	FB000012	aman		
9f1f283e51a864e	dda352919cf81b9	FB000159	true		
d3bfa872c3a5bfa	ee5f00d62b72cc4	FB000131	true		
6f835a3dd89388b	ee5f00d62b72cc4	FB000001	asdf		
51ab6812891bdbf	69a7b900708685c	FB000142	true		
24370e530c243e5	69a7b900708685c	FB000010	qwer134		
80888ba288cdb00	af8b00d596b2ead	FB000081	true		
d8a998f6f898879	af8b00d596b2ead	FB000157	true		
7e1a7acc2c68407	cc5ef893d60564e	FB000137	true		
2ab23be7ef1eb52	b5156a492f2838f	FB000072	true		
f88dda0d2340087	b5156a492f2838f	FB000188	lainnya		
fe1ab82bc98e3e5	b5156a492f2838f	FB000144	true		
42c6f1438b70a44	b5156a492f2838f	FB000157	true		
8387b136dc06d90	b5156a492f2838f	FB000005	-		
606ff38a1929b57	b5156a492f2838f	FB000043	Tangga	1	
b8a770345274260	cc5ef893d60564e	FB000159	true		
99923c2bb04d4cd	8b6609172fd12fc	FB000022	true		
c5cde8b705c8b83	8b6609172fd12fc	FB000073	true		
458ff7df3e3bc07	8b6609172fd12fc	FB000098	true		
3a2206058810829	8b6609172fd12fc	FB000146	true		
04c55b559b4f652	8b6609172fd12fc	FB000004	asdf		
383a2aef3c680a5	c91d2c29b9f194e	FB000079	true		
d50d1cdb0fde63c	c91d2c29b9f194e	FB000133	true		
73f4d7d8d39709d	c91d2c29b9f194e	FB000159	true		
99e64c59816f63f	f82dae290502e70	FB000151	true		
8e36914c0cbf2ab	f82dae290502e70	FB000011	234		
6357d018fb94646	6fdb8baf0bac546	FB000026	true		
1c04af445d07cbf	6fdb8baf0bac546	FB000093	123		
0660c65dd65faf1	b54665cb812e987	FB000137	true		
80b5f4aaf37642d	b54665cb812e987	FB000153	true		
42f95ba8ad99992	b54665cb812e987	FB000005	sdf		
586459d58aad37a	6fdb8baf0bac546	FB000142	true		
4e7b8342bf957c3	c91d2c29b9f194e	FB000046	sdfsf	52345	
952b6de688e7367	6fdb8baf0bac546	FB000006	ruang		
0df311bd67ea7fd	6fdb8baf0bac546	FB000017	nama		
3a8a2b36d126ff2	6e798c129a380f0	FB000040	true		
c9449aa611fffb3	0240fe6e0754b07	FB000093	fdfd d		
82d558e6fcb4156	0240fe6e0754b07	FB000135	true		
ba1cefbc625f31d	0240fe6e0754b07	FB000151	true		
d94ce610d209f48	0240fe6e0754b07	FB000004	bwdg asd		
1cb3bd3936f6e0e	0240fe6e0754b07	FB000094	sdf sdf		
70f6d60cc81f68d	6e798c129a380f0	FB000142	true		
e21079137417ce0	6e798c129a380f0	FB000006	qwer 345		
b2889a20a12e748	6e798c129a380f0	FB000017	134		
a97ad8c81d4c752	7cb96acccc53861	FB000085	true		
c28493a553d0a5e	7cb96acccc53861	FB000137	true		
37be92046e525d6	7cb96acccc53861	FB000159	true		
fa4d367d4551bf2	9374709c447b63e	FB000137	true		
bd24a5fa92dbf4e	9374709c447b63e	FB000146	true		
46e4298cbf6f185	9374709c447b63e	FB000155	true		
b59e19d916c4871	9374709c447b63e	FB000003	2		
fc38aa2ad076332	9374709c447b63e	FB000010	1234		
d7b83cca35b5973	7cb96acccc53861	FB000015	fsdfsdf		
52d8a746207fc58	d7c54a5b9abad62	FB000139	true		
2a39cfd64e8dacc	d7c54a5b9abad62	FB000011	134		
d3d1d39801b73a3	1c84142c16881cc	FB000031	true		
068559bb994c816	1c84142c16881cc	FB000051	true		
add6df426f9d3d6	1c84142c16881cc	FB000096	true		
d02b8179ada3505	1c84142c16881cc	FB000135	true		
c528b819850ba06	1c84142c16881cc	FB000148	true		
ae972a0acf064e2	1c84142c16881cc	FB000001	asdf asdf asdfohuasoidfjh wdpofja sdopfkj asdopfj aosdifj ijfo aisjfo asdflkjqeofi jaspd fsajdf asdfj osakdfj lskdfjowejf lsdkf osadjfoasdjfo iwejfl ksdjf akdsjfoqwejf dkjfl askdjf owqi efjl skdjf owqiefj laksdjf laksdjfo eifja skdjfl asdkjfo2efj saokdfj oi2ejfo askdjfo wiejfo sdjfoa djfiqwjefo asdk jfoas djfoasdfj oqiejfiawjfo kasjd foiw jefoasjdf		
0e8ff4429f9690a	d57a36c60639b07	FB000139	true		
f0f93aeff9b6436	d57a36c60639b07	FB000159	true		
890fea3f187f57a	1c84142c16881cc	FB000011	3000		
de32f41c479a41b	eb63f2951d3241c	FB000093	asdf		
d720b88021e5ab2	eb63f2951d3241c	FB000144	true		
89e3306e40348c7	9462387ae8d3621	FB000137	true		
6d67e58275f6e4a	9462387ae8d3621	FB000005	sdfsdf		
9415064b07bf089	0b2423cc8bd003e	FB000055	true		
d5861fab4b5ae06	0b2423cc8bd003e	FB000139	true		
ad30a12ee94aab9	17eaf519e90a861	FB000139	true		
5b55ebda4f3bd8a	17eaf519e90a861	FB000155	true		
95c5d96244d2368	eb63f2951d3241c	FB000004	asdfasdf		
b8433285551e559	17eaf519e90a861	FB000009	asdf		
0960ac9e707a84c	d18e67b456f8250	FB000048	true		
7d235be5cf28d08	d18e67b456f8250	FB000124	true		
23b478eac438a04	3aa7a14111037bd	FB000069	true		
b18ad6caa8965bf	3aa7a14111037bd	FB000128	true		
61eb7e081322157	3aa7a14111037bd	FB000139	true		
63d1aadb648ef6a	3aa7a14111037bd	FB000151	true		
e5e8bf1ffc45b85	3aa7a14111037bd	FB000001	Ganti lampu yang mati di ruang SIT		
0b329b94c960181	3aa7a14111037bd	FB000010	Muhammad Sukarno Hatta		
2a48ccee2385d54	3aa7a14111037bd	FB000067	true		
ea0771910cd21f5	56e801ace315645	FB000139	true		
69241022e671a99	56e801ace315645	FB000153	true		
85e3112ee7fe416	56e801ace315645	FB000007	asdf		
3f99ed1c85daed1	56e801ace315645	FB000014	asdf		
cbae35f97760e5c	38e8f73d4bb470e	FB000079	true		
db96d1e65a1d865	38e8f73d4bb470e	FB000137	true		
cfd1678534230cd	38e8f73d4bb470e	FB000151	true		
e108701b01b829f	38e8f73d4bb470e	FB000006	Ruang Gym		
4c507197e2d0fe4	38e8f73d4bb470e	FB000013	aman		
0b11b1571a6deea	38e8f73d4bb470e	FB000019	11:00		
9eceedae0b0bee8	dda352919cf81b9	FB000001	asdf		
99b330969a3bdc5	69a7b900708685c	FB000144	true		
de7ef6910319ce6	69a7b900708685c	FB000011	134		
f7eb74fdf1bb24c	ee5f00d62b72cc4	FB000133	true		
0b76a867cfba130	ee5f00d62b72cc4	FB000003	asdf		
d89cdd253980f35	b5156a492f2838f	FB000027	true		
8e32118daa4da22	b5156a492f2838f	FB000074	true		
1192b13c9c0b471	b5156a492f2838f	FB000131	true		
658d59ce07bfcab	af8b00d596b2ead	FB000082	true		
088950567a62b4a	af8b00d596b2ead	FB000159	true		
312e2de410f8e18	cc5ef893d60564e	FB000139	true		
b8b561417a26b54	cc5ef893d60564e	FB000001	asdf		
558d01f72b4e794	8b6609172fd12fc	FB000023	true		
99d13f76c6c0a93	8b6609172fd12fc	FB000074	true		
4ab6f97a4970608	8b6609172fd12fc	FB000099	true		
992d431f765c1fc	8b6609172fd12fc	FB000148	true		
8c77f5ee89bd741	8b6609172fd12fc	FB000005	13413		
33b46fe84aa7f0e	c91d2c29b9f194e	FB000086	true		
d1c2066e900ee04	c91d2c29b9f194e	FB000135	true		
f2228bd25474e52	c91d2c29b9f194e	FB000001	test		
39b491ef0b02eb8	f82dae290502e70	FB000153	true		
ca17b4630c2fc7d	f82dae290502e70	FB000012	asdf		
e44a5225bf72d27	6fdb8baf0bac546	FB000027	true		
bd56ceb9f8e36d0	6fdb8baf0bac546	FB000111	true		
e00d1b2dfae2f10	b54665cb812e987	FB000139	true		
55e0f629c86326a	b54665cb812e987	FB000155	true		
611fccd746ecb02	b54665cb812e987	FB000009	sdf asdf		
12bb81c5cc7fdb8	0240fe6e0754b07	FB000105	fsdf 		
aa15cadb187c750	0240fe6e0754b07	FB000137	true		
907ad0570f62724	0240fe6e0754b07	FB000153	true		
bf5113e3ad22e2f	0240fe6e0754b07	FB000005	fasdf 		
b0a6ba1f710c78a	6fdb8baf0bac546	FB000144	true		
61e809add097939	c91d2c29b9f194e	FB000094	24t34t		
64413beffbe19d8	6fdb8baf0bac546	FB000007	tuja		
cebca018197822b	6fdb8baf0bac546	FB000018	2023-01-22		
4ed5dddacbde33c	6e798c129a380f0	FB000069	true		
82f5193cc47a10d	6e798c129a380f0	FB000144	true		
b008bc63d326d75	6e798c129a380f0	FB000007	sdfg 345		
21310e51bdc5350	6e798c129a380f0	FB000018	2023-01-21		
5c6bc02b5bc846a	7cb96acccc53861	FB000086	true		
2a50c9496e04ad8	7cb96acccc53861	FB000139	true		
fc0738a964d03d8	7cb96acccc53861	FB000001	asdfasdf		
2c4a7b70f8aa219	7cb96acccc53861	FB000016	sdfsd		
1f07d952f928aa6	b5156a492f2838f	FB000146	true		
789ba025c40d0df	b5156a492f2838f	FB000159	true		
4eb717149670f99	b5156a492f2838f	FB000009	PT. Berca		
7d02b8e48ddc3cf	d7c54a5b9abad62	FB000142	true		
89d33db08f82f4f	1c84142c16881cc	FB000035	true		
751725b744d0f9c	1c84142c16881cc	FB000068	true		
b096d5bb4e6b73b	d57a36c60639b07	FB000142	true		
a182bfcddd8b3c5	d57a36c60639b07	FB000001	asdf		
07f480d6473563c	1c84142c16881cc	FB000102	true		
b97101f447c1053	1c84142c16881cc	FB000137	true		
0637a5b80358f8c	1c84142c16881cc	FB000151	true		
dd3fac967f7e172	1c84142c16881cc	FB000003	asdf asdf		
fd933e9d618afa2	1c84142c16881cc	FB000043	asdf asdf asdf||asdf13 asdf wf||asdf 	13||13||13423	
14599a445efcd92	9462387ae8d3621	FB000139	true		
63fd3dc3359b08c	9462387ae8d3621	FB000009	fdfsd 		
39480282eb66da7	eb63f2951d3241c	FB000126	true		
0328cfc0d96a2a1	eb63f2951d3241c	FB000146	true		
58b3b3d037b471d	0b2423cc8bd003e	FB000059	true		
d46429283bc7589	0b2423cc8bd003e	FB000142	true		
8ea586b26b79005	17eaf519e90a861	FB000142	true		
684be9da6b641f3	0b2423cc8bd003e	FB000003	STO		
77aa61d020ca441	17eaf519e90a861	FB000157	true		
b09b1f2ebfcc093	17eaf519e90a861	FB000010	asdf		
f7dc77f7b0ee86d	eb63f2951d3241c	FB000005	asdfasdf		
b764ca303aabb86	9374709c447b63e	FB000131	true		
cb748e53759ea95	9374709c447b63e	FB000139	true		
4b154d508170d6e	9374709c447b63e	FB000148	true		
b0c209471802b23	9374709c447b63e	FB000157	true		
c7b2ec60d541e72	9374709c447b63e	FB000004	134		
7d578d4eff2e095	9374709c447b63e	FB000011	1234		
1db36c8a2686948	d18e67b456f8250	FB000049	true		
6f1aa76047299bc	d18e67b456f8250	FB000125	true		
014cb42f984b45f	d18e67b456f8250	FB000144	true		
016091b24570ff7	d18e67b456f8250	FB000157	true		
006650c651328ce	3aa7a14111037bd	FB000025	true		
64f11c388f4625a	3aa7a14111037bd	FB000082	true		
da671763f2369ab	3aa7a14111037bd	FB000131	true		
49b50b413c2ba85	3aa7a14111037bd	FB000142	true		
30b283455e24f74	3aa7a14111037bd	FB000153	true		
4bf78be56853dd9	3aa7a14111037bd	FB000003	Ruang SIT		
1fc84524c4634a1	3aa7a14111037bd	FB000011	2		
c68cedbcc5f7c06	d18e67b456f8250	FB000009	Perusahaan		
7fc55625ab4ecae	d18e67b456f8250	FB000045	material	7	
80c2c63a9789642	56e801ace315645	FB000142	true		
bbdd8f734e5f5ff	56e801ace315645	FB000155	true		
6e5ac912143ff73	56e801ace315645	FB000009	134		
a458016f6d1c761	56e801ace315645	FB000015	asdf		
f5369997bab0c2b	38e8f73d4bb470e	FB000092	true		
be0a33a75977be9	38e8f73d4bb470e	FB000139	true		
2f4bd5db1ca9f4b	38e8f73d4bb470e	FB000153	true		
1de3ca859ad2479	38e8f73d4bb470e	FB000007	Tambah peralatan-peralatan baru		
56b174a510b9193	38e8f73d4bb470e	FB000014	aman		
8cf91936c9e0557	2fe1398eace89cf	FB000027	true		
fe12696a71395f1	2fe1398eace89cf	FB000039	true		
746702a91b2cc9d	2fe1398eace89cf	FB000040	true		
7e36dce726b14ea	2fe1398eace89cf	FB000071	true		
04e9bd65eb10f6d	2fe1398eace89cf	FB000077	true		
1391346053cc4fa	2fe1398eace89cf	FB000096	true		
1d8f896fff11641	2fe1398eace89cf	FB000097	true		
fda992a65e88fe2	2fe1398eace89cf	FB000098	true		
d99e99b1b9b292e	2fe1398eace89cf	FB000099	true		
eb8209b02a5723f	2fe1398eace89cf	FB000126	true		
36df56ded35b3de	2fe1398eace89cf	FB000127	true		
08c687264379835	2fe1398eace89cf	FB000128	true		
0afa739947cc2c3	2fe1398eace89cf	FB000131	true		
45db0119ba609aa	2fe1398eace89cf	FB000133	true		
a3c2ee39ce08707	2fe1398eace89cf	FB000135	true		
a4de0bdb6308f94	2fe1398eace89cf	FB000137	true		
347e565beadf220	2fe1398eace89cf	FB000139	true		
aa7066dc5100331	2fe1398eace89cf	FB000142	true		
0f0b06dced61eba	2fe1398eace89cf	FB000144	true		
ab87f96246928fe	2fe1398eace89cf	FB000146	true		
fbdc83f278fc6e1	2fe1398eace89cf	FB000148	true		
0b68373bb0609c0	2fe1398eace89cf	FB000151	true		
fa21eb8f6e2b3da	2fe1398eace89cf	FB000153	true		
aa242d5fd2624f2	2fe1398eace89cf	FB000155	true		
08685cd80548c16	2fe1398eace89cf	FB000157	true		
6aa00c9dd00dc59	2fe1398eace89cf	FB000159	true		
29242489f238a0d	2fe1398eace89cf	FB000001	asdf		
710709f026394af	2fe1398eace89cf	FB000003	asdfasdf		
e693fd62777af52	2fe1398eace89cf	FB000004	asdfasdf		
a87b8daf3b94334	2fe1398eace89cf	FB000005	asdfasdf		
ef59e57fd7ab2ab	2fe1398eace89cf	FB000009	asdfasdf		
59a4d92b4561b9b	2fe1398eace89cf	FB000010	asdfasdf		
6ec49aec0b478f1	2fe1398eace89cf	FB000011	123		
c40b4cdeb2b1962	2fe1398eace89cf	FB000043	sdf	123	
9a1bdbd2706e13f	2fe1398eace89cf	FB000044	fds	123	
0dda08d6ff6b024	2fe1398eace89cf	FB000065	true		
2ad98f26b431045	2fe1398eace89cf	FB000067	false		
f6bdede29e454f5	d7c54a5b9abad62	FB000144	true		
a79e6d45fbe97fc	9462387ae8d3621	FB000142	true		
bbe2efac12b1312	9462387ae8d3621	FB000010	sdfsdf		
a4d1c51c6434286	0b2423cc8bd003e	FB000068	true		
8a5aedb6c20ee1d	0b2423cc8bd003e	FB000144	true		
b1944604621ec1e	0b2423cc8bd003e	FB000004	Tanjung Gading		
08381cdb27ddc43	cb93caf3102bb4e	FB000023	true		
546dad3e6027f7a	cb93caf3102bb4e	FB000038	true		
fb7e3ddd60a890b	cb93caf3102bb4e	FB000071	true		
acf82f6cf696e35	cb93caf3102bb4e	FB000079	true		
95123bddb2ad4a2	cb93caf3102bb4e	FB000087	true		
84e0c945f413d5c	cb93caf3102bb4e	FB000097	true		
94df3083800e7d3	cb93caf3102bb4e	FB000105	lainnn		
758bbfc7d4d7cc1	cb93caf3102bb4e	FB000125	true		
1c5127c029f1b5b	cb93caf3102bb4e	FB000135	true		
241cff8450f1050	cb93caf3102bb4e	FB000151	true		
21d39a2ec8dc115	cb93caf3102bb4e	FB000004	Lantai 6		
fd47b50c6b55f3b	cb93caf3102bb4e	FB000045	material 1||martial arts	333||1	
13420730974e95d	1db69953125e16b	FB000137	true		
757072635cc03b0	1db69953125e16b	FB000151	true		
e7cddaf306d543e	1db69953125e16b	FB000003	asdfasdf		
980f4c47b47ac0c	516f43df8a5743f	FB000139	true		
2d09afb4b023c6c	516f43df8a5743f	FB000151	true		
1e9721746ec576d	516f43df8a5743f	FB000009	asdf		
7fc2850c1e7a32d	5ed20f212f6ee2e	FB000131	true		
8930d5192aaf570	5ed20f212f6ee2e	FB000133	true		
f97fc93a46264a8	5ed20f212f6ee2e	FB000135	true		
a1f5453eab79b64	5ed20f212f6ee2e	FB000137	true		
fc37b55f79db336	5ed20f212f6ee2e	FB000139	true		
2fcde33c7dd1b0c	5ed20f212f6ee2e	FB000142	true		
4e6bb1c57e50eea	5ed20f212f6ee2e	FB000144	true		
7156bf6267f7c80	5ed20f212f6ee2e	FB000146	true		
6c8279821a7ba08	5ed20f212f6ee2e	FB000148	true		
7fab07fad67e20e	5ed20f212f6ee2e	FB000151	true		
930860a17a33b2f	5ed20f212f6ee2e	FB000157	true		
7064b6e8a10ed40	5ed20f212f6ee2e	FB000001	qwer asdf		
3f25228f2044ca5	5ed20f212f6ee2e	FB000003	qwer		
cd9a7e60b4e1193	5ed20f212f6ee2e	FB000004	qwer		
a5c1745b23c645f	5ed20f212f6ee2e	FB000009	qwer		
3f83f1b0ae9bf5a	5ed20f212f6ee2e	FB000010	qwer		
9a679407af324d4	5ed20f212f6ee2e	FB000011	1234		
c7e5544372e4ce6	64a438894a4bd74	FB000131	true		
fa04d9756ef81da	64a438894a4bd74	FB000133	true		
8e2fc40de2a3259	64a438894a4bd74	FB000135	true		
a8d5e2276960a07	64a438894a4bd74	FB000137	true		
5f3eb5cebc425d3	64a438894a4bd74	FB000139	true		
f1f7add31e080ae	64a438894a4bd74	FB000142	true		
7c4d16f1929a7cc	64a438894a4bd74	FB000144	true		
542172bc23754d3	64a438894a4bd74	FB000146	true		
070b8864020f15a	64a438894a4bd74	FB000148	true		
f549f8063afa909	64a438894a4bd74	FB000151	true		
6827603ee19cb7b	64a438894a4bd74	FB000157	true		
024df499c308b75	64a438894a4bd74	FB000001	qwer		
b360e096404858e	64a438894a4bd74	FB000003	asdf		
4d32223c3267e69	64a438894a4bd74	FB000004	asdf		
71898afc23079a4	64a438894a4bd74	FB000005	qwerasdf asdf 		
9f63eb2ee77e96d	64a438894a4bd74	FB000009	asdf		
e8e7effae739c8b	64a438894a4bd74	FB000010	asdf		
897da8e20b8402c	64a438894a4bd74	FB000011	123		
690fcb6d3805d74	61a311ce254b33c	FB000131	true		
9a32cafb3ff315b	61a311ce254b33c	FB000133	true		
078cda92b6adefa	61a311ce254b33c	FB000135	true		
33a702093714ff8	61a311ce254b33c	FB000137	true		
2726f92e77c64d8	61a311ce254b33c	FB000139	true		
da9dceaa71f126a	61a311ce254b33c	FB000142	true		
ac386dca24e486d	61a311ce254b33c	FB000144	true		
fc6e59a01d788eb	61a311ce254b33c	FB000146	true		
\.


--
-- Data for Name: md_action; Type: TABLE DATA; Schema: sika; Owner: inalum
--

COPY sika.md_action (id_action, kode, nm_action, deskripsi, tgl_insert) FROM stdin;
zfoaf1euM9	AC	Access	Memberikan Access Pada Menu	2023-01-05 15:00:59.528499
58yFrtOtY7	VW	View	Melihat Detail Data	2023-01-05 15:00:59.528499
NjzurCwdyf	IN	Insert	Menambahkan Data	2023-01-05 15:00:59.528499
vpdfpkneUv	UP	Update	Mengedit Data	2023-01-05 15:00:59.528499
i798aWl65T	DT	Delete	Menghapus Data	2023-01-05 15:00:59.528499
1AqCrdhIr9	DW	Download	Mendownload Data	2023-01-05 15:00:59.528499
\.


--
-- Data for Name: md_form_body; Type: TABLE DATA; Schema: sika; Owner: postgres
--

COPY sika.md_form_body (id_form_body, nm_form_body, tipe_form_body, level, urut, urut_global, parent, is_required, tgl_insert, need_upload) FROM stdin;
FB000137	Saya dan Tim telah dinyatakan sehat untuk bekerja (dibuktikan dengan Surat Sehat Dokter / Medical Check-Up)	CHECKBOX	2	4	151	FB000130	t	2023-03-20	t
FB000075	Pelindung Pendengaran	CHECKBOX	1	8	88	FH007	f	2023-03-20	f
FB000076	Penutup/<i>Hood</i> Tahan Api	CHECKBOX	1	9	89	FH007	f	2023-03-20	f
FB000043	Alat	TABLE	1	1	14	FH002	f	2023-03-20	t
FB000044	Mesin	TABLE	1	2	15	FH002	f	2023-03-20	t
FB000045	Material	TABLE	1	3	16	FH002	f	2023-03-20	t
FB000046	Alat Berat	TABLE	1	4	17	FH002	f	2023-03-20	t
FB000007	Tujuan Memasuki Ruangan	INPUT	1	4	7	FH001	t	2023-03-20	f
FB000008	Pelaksana Pekerjaan	HEADER	1	5	8	FH001	f	2023-03-20	f
FB000009	Nama Perusahaan	INPUT	2	1	9	FB000008	t	2023-03-20	f
FB000010	Nama Pengawas	INPUT	2	2	10	FB000008	t	2023-03-20	f
FB000012	Oxygen Concentration||% O<sub>2</sub>	INPUT	1	1	19	FH003	t	2023-03-20	f
FB000013	Flammable Gas||% LEL	INPUT	1	2	20	FH003	t	2023-03-20	f
FB000014	Toxic Gas||ppm	INPUT	1	3	21	FH003	t	2023-03-20	f
FB000015	Poly Test||ppm	INPUT	1	4	22	FH003	t	2023-03-20	f
FB000016	Other	INPUT	1	5	23	FH003	f	2023-03-20	f
FB000017	Authorized Gas Tester (Nama)	INPUT	1	6	24	FH003	t	2023-03-20	f
FB000018	Tanggal	DATE	1	7	25	FH003	t	2023-03-20	f
FB000019	Jam	TIME	1	8	26	FH003	t	2023-03-20	f
FB000020	Suasana Berbahaya	CHECKBOX	1	1	28	FH004	f	2023-03-20	f
FB000021	Api atau Busur Api Terbuka	CHECKBOX	1	2	29	FH004	f	2023-03-20	f
FB000023	Bahan Radioaktif Alami/Radioaktif Lain	CHECKBOX	1	4	31	FH004	f	2023-03-20	f
FB000024	Tekanan Terperangkap	CHECKBOX	1	5	32	FH004	f	2023-03-20	f
FB000025	Bahaya Jatuh	CHECKBOX	1	6	33	FH004	f	2023-03-20	f
FB000026	Mesin Bergerak	CHECKBOX	1	7	34	FH004	f	2023-03-20	f
FB000027	Bahaya Di Atas Kepala	CHECKBOX	1	8	35	FH004	f	2023-03-20	f
FB000028	Ada Kabel Listrik Bertegangan	CHECKBOX	1	9	36	FH004	f	2023-03-20	f
FB000029	Ada Pekerjaan Pengelasan	CHECKBOX	1	10	37	FH004	f	2023-03-20	f
FB000030	Dilakukan Di Daerah Penggalian	CHECKBOX	1	11	38	FH004	f	2023-03-20	f
FB000031	Bahan Kimia Berbahaya	CHECKBOX	1	12	39	FH004	f	2023-03-20	f
FB000032	Operasi yang Berdekatan	CHECKBOX	1	13	40	FH004	f	2023-03-20	f
FB000033	Keruntuhan Penggalian	CHECKBOX	1	14	41	FH004	f	2023-03-20	f
FB000034	Mudah Terbakar/Meledak	CHECKBOX	1	15	42	FH004	f	2023-03-20	f
FB000035	Penggalian Dekat Pondasi	CHECKBOX	1	16	43	FH004	f	2023-03-20	f
FB000036	Penggalian Lebih dari 1,5 m	CHECKBOX	1	17	44	FH004	f	2023-03-20	f
FB000037	Akan Ada Percikan dari Alat	CHECKBOX	1	18	45	FH004	f	2023-03-20	f
FB000038	Kelistrikan	CHECKBOX	1	19	46	FH004	f	2023-03-20	f
FB000039	Muatan Berat	CHECKBOX	1	20	47	FH004	f	2023-03-20	f
FB000040	Kebisingan	CHECKBOX	1	21	48	FH004	f	2023-03-20	f
FB000041	Keruntuhan Penggalian	CHECKBOX	1	22	49	FH004	f	2023-03-20	f
FB000193	Kekurangan Oksigen	CHECKBOX	1	23	50	FH004	f	2023-03-20	f
FB000194	Kekurangan Pencahayaan	CHECKBOX	1	24	51	FH004	f	2023-03-20	f
FB000195	Gas Berbahaya/Beracun	CHECKBOX	1	25	52	FH004	f	2023-03-20	f
FB000042	Lainnya	CHECKINPUT	1	26	53	FH004	f	2023-03-20	f
FB000047	Tanggul penahan dipasang	CHECKBOX	1	1	54	FH005	f	2023-03-20	f
FB000048	Penopang dipasang	CHECKBOX	1	2	55	FH005	f	2023-03-20	f
FB000049	Tanda Stop dipasang	CHECKBOX	1	3	56	FH005	f	2023-03-20	f
FB000051	Tersedia akses masuk &amp; keluar penggalian	CHECKBOX	1	5	58	FH005	f	2023-03-20	f
FB000190	Tempat Material aman dari penggalian	CHECKBOX	1	6	59	FH005	f	2023-03-20	f
FB000191	Tersedia Perlindungan Perimeter	CHECKBOX	1	7	60	FH005	f	2023-03-20	f
FB000052	Tersedia alat untuk membuang air	CHECKBOX	1	8	61	FH005	f	2023-03-20	f
FB000053	Area kerja aman dari aliran listrik	CHECKBOX	1	9	62	FH005	f	2023-03-20	f
FB000054	Rangka tangga dan anak tangga tidak licin &amp; dalam kondisi baik	CHECKBOX	1	10	63	FH005	f	2023-03-20	f
FB000055	Tidak ada pergerakan di bagian atas dan dasar tangga	CHECKBOX	1	11	64	FH005	f	2023-03-20	f
FB000057	Pembatas &amp; rambu peringatan pada tangga yang posisinya melintang di jalur pejalan kaki/kendaraan	CHECKBOX	1	13	66	FH005	f	2023-03-20	f
FB000058	Pemeriksaan peralatan akses tali. (angkur, tali kernmantle, alat naik, alat turun, dsb)	CHECKBOX	1	14	67	FH005	f	2023-03-20	f
FB000059	Pengunci tangga dalam kondisi baik, berfungsi baik dan dipasang dalam posisi yang benar	CHECKBOX	1	15	68	FH005	f	2023-03-20	f
FB000060	Peralatan pengangkat dalam kondisi baik dan memeriksa kondisi peralatan sebelum penggunaan	CHECKBOX	1	16	69	FH005	f	2023-03-20	f
FB000061	Struktur perancah dalam kondisi baik	CHECKBOX	1	17	70	FH005	f	2023-03-20	f
FB000062	Perancah berpindah harus dilengkapi dengan pengunci kaki*	CHECKBOX	1	18	71	FH005	f	2023-03-20	f
FB000063	Perancah dengan ketinggian diatas 2 meter harus dilengkapi dengan pagar / pengaman tepi	CHECKBOX	1	19	72	FH005	f	2023-03-20	f
FB000180	Lainnya	CHECKINPUT	1	20	73	FH005	f	2023-03-20	f
FB000064	Isolasi Proses/Mekanikal	HEADER	1	1	76	FH006	f	2023-03-20	f
FB000065	Berlaku||Tidak Berlaku	RADIO	2	1	77	FB000064	t	2023-03-20	f
FB000066	Isolasi Elektrikal	HEADER	1	2	78	FH006	f	2023-03-20	f
FB000067	Berlaku||Tidak Berlaku	RADIO	2	1	79	FB000066	t	2023-03-20	f
FB000068	Helm	CHECKBOX	1	1	81	FH007	f	2023-03-20	f
FB000069	Kacamata <i>Safety</i>	CHECKBOX	1	2	82	FH007	f	2023-03-20	f
FB000070	Lensa Berwarna	CHECKBOX	1	3	83	FH007	f	2023-03-20	f
FB000071	<i>Goggles</i>	CHECKBOX	1	4	84	FH007	f	2023-03-20	f
FB000072	<i>Faceshield</i>	CHECKBOX	1	5	85	FH007	f	2023-03-20	f
FB000073	Tudung Pengelasan	CHECKBOX	1	6	86	FH007	f	2023-03-20	f
FB000074	Kacamata memotong	CHECKBOX	1	7	87	FH007	f	2023-03-20	f
FB000011	Jumlah Pekerja	NUMBER	2	3	11	FB000008	t	2023-03-20	f
FB000077	Penutup Isolasi (<i>Insulate Hood</i>)	CHECKBOX	1	10	90	FH007	f	2023-03-20	f
FB000078	Sarung Tangan	HEADER	1	11	91	FH007	f	2023-03-20	f
FB000079	Penggunaan Umum	CHECKBOX	2	1	92	FB000078	f	2023-03-20	f
FB000001	Deskripsi Pekerjaan	INPUT	1	1	1	FH001	t	2023-03-20	f
FB000003	Nama Fasilitas	INPUT	2	1	3	FB000002	t	2023-03-20	f
FB000004	Area	INPUT	2	2	4	FB000002	t	2023-03-20	f
FB000005	Plant	INPUT	2	3	5	FB000002	f	2023-03-20	f
FB000083	Lainnya	CHECKINPUT	2	5	96	FB000078	f	2023-03-20	f
FB000084	Pelindung Kaki	HEADER	1	12	97	FH007	f	2023-03-20	f
FB000085	Sepatu <i>Safety</i>/Sepatu Boot	CHECKBOX	2	1	98	FB000084	f	2023-03-20	f
FB000086	Sepatu <i>Safety</i> Tahan Bahan Kimia	CHECKBOX	2	2	99	FB000084	f	2023-03-20	f
FB000087	<i>Boot Cover</i> (Pelindung Sepatu)	CHECKBOX	2	3	100	FB000084	f	2023-03-20	f
FB000088	Pelindung Pernapasan	HEADER	1	13	101	FH007	f	2023-03-20	f
FB000089	SCBA	CHECKBOX	2	1	102	FB000088	f	2023-03-20	f
FB000090	Saluran Selang dengan Unit Penyelamatan	CHECKBOX	2	2	103	FB000088	f	2023-03-20	f
FB000091	Filter Udara Partikulat Efisiensi TInggi (HEPA Filter)	CHECKBOX	2	3	104	FB000088	f	2023-03-20	f
FB000092	Masker Debu/Kabut	CHECKBOX	2	4	105	FB000088	f	2023-03-20	f
FB000093	Masker Cartridge Bahan Kimia	CHECKINPUT	2	5	106	FB000088	f	2023-03-20	f
FB000094	Tipe	INPUT	3	1	107	FB000093	f	2023-03-20	f
FB000095	Pakaian Pelindung	HEADER	1	14	108	FH007	f	2023-03-20	f
FB000096	Normal	CHECKBOX	2	1	109	FB000095	f	2023-03-20	f
FB000097	Tahan Api	CHECKBOX	2	2	110	FB000095	f	2023-03-20	f
FB000098	Tahan Air/Bahan Kimia	CHECKBOX	2	3	111	FB000095	f	2023-03-20	f
FB000099	Sekali Pakai (<i>Disposable</i>)	CHECKBOX	2	4	112	FB000095	f	2023-03-20	f
FB000100	Penahan Jatuh	HEADER	1	15	113	FH007	f	2023-03-20	f
FB000101	Safety Body Harness	CHECKBOX	2	1	114	FB000100	f	2023-03-20	f
FB000102	Tali Pengikat	CHECKBOX	2	2	115	FB000100	f	2023-03-20	f
FB000103	Jalur Pemulihan	CHECKBOX	2	3	116	FB000100	f	2023-03-20	f
FB000104	Alat Pemulihan Vertikal	CHECKBOX	2	4	117	FB000100	f	2023-03-20	f
FB000192	Pagar Pengaman	CHECKBOX	2	5	118	FB000100	f	2023-03-20	f
FB000105	Lainnya	CHECKINPUT	2	6	119	FB000100	f	2023-03-20	f
FB000106	Personal Monitor	HEADER	1	16	120	FH007	f	2023-03-20	f
FB000107	Ozon Detector	CHECKBOX	2	1	121	FB000106	f	2023-03-20	f
FB000108	Nox Detector	CHECKBOX	2	2	122	FB000106	f	2023-03-20	f
FB000109	Sox Detector	CHECKBOX	2	3	123	FB000106	f	2023-03-20	f
FB000189	Clorine Detector	CHECKBOX	2	4	124	FB000106	f	2023-03-20	f
FB000110	Lainnya (sebutkan)	CHECKINPUT	2	5	125	FB000106	f	2023-03-20	f
FB000111	Fixed Fire Fighting System Isolated	CHECKBOX	1	1	126	FH008	f	2023-03-20	f
FB000112	Fire Detection System Inhibited	CHECKBOX	1	2	127	FH008	f	2023-03-20	f
FB000113	Vessel Air Purged	CHECKBOX	1	3	128	FH008	f	2023-03-20	f
FB000114	Vessel Clean to allow Entry	CHECKBOX	1	4	129	FH008	f	2023-03-20	f
FB000115	Safety Equipment at Vessel	CHECKBOX	1	5	130	FH008	f	2023-03-20	f
FB000116	Special Clothing	CHECKBOX	1	6	131	FH008	f	2023-03-20	f
FB000117	Vessel Blanked form Hazard	CHECKBOX	1	7	132	FH008	f	2023-03-20	f
FB000118	Vessel Isolated form Hazard	CHECKBOX	1	8	133	FH008	f	2023-03-20	f
FB000119	Chemical Data Sheets	CHECKBOX	1	9	134	FH008	f	2023-03-20	f
FB000120	Gas Checks	CHECKBOX	1	10	135	FH008	f	2023-03-20	f
FB000121	Specific Procedure Attached	CHECKBOX	1	11	136	FH008	f	2023-03-20	f
FB000122	Continuous Monitoring	CHECKBOX	1	12	137	FH008	f	2023-03-20	f
FB000123	Pemadam Api (Apar, Karung Goni Basah)	CHECKBOX	1	13	138	FH008	f	2023-03-20	f
FB000124	Barikade (Garis Tanda Bahaya)	CHECKBOX	1	14	139	FH008	f	2023-03-20	f
FB000125	Rambu/Tanda Keselamatan	CHECKBOX	1	15	140	FH008	f	2023-03-20	f
FB000126	<i>LOTO (Lock Out-Tag Out)</i>	CHECKBOX	1	16	141	FH008	f	2023-03-20	f
FB000127	Radio Telekomunikasi	CHECKBOX	1	17	142	FH008	f	2023-03-20	f
FB000128	Jaring/Tali Keselamatan	CHECKBOX	1	18	143	FH008	f	2023-03-20	f
FB000129	P3K	CHECKBOX	1	19	144	FH008	f	2023-03-20	f
FB000188	Lainnya	CHECKINPUT	1	20	145	FH008	f	2023-03-20	f
FB000130	Penanggung Jawab Pekerjaan	HEADER	1	1	147	FH009	f	2023-03-20	f
FB000133	Saya pribadi sudah memeriksa izin ini dan juga peralatan / daerah / benda yang terrinci di atas.	CHECKBOX	2	2	149	FB000130	t	2023-03-20	f
FB000135	Saya mengerti sifat dan lingkup dari pekerjaan serta perlindungan yang harus diikuti selama penyelesaian tugas dengan aman.	CHECKBOX	2	3	150	FB000130	t	2023-03-20	f
FB000139	Saya bisa melakukan tugas yang dimaksud dengan selamat.	CHECKBOX	2	5	152	FB000130	t	2023-03-20	f
FB000141	Section Lain yang Terlibat	HEADER	1	2	153	FH009	f	2023-03-20	f
FB000151	Orang yang bertanggung jawab langsung untuk melakukan tugas harus menyimpat salinan asli surat izin ini setiap saat.	CHECKBOX	2	1	159	FB000150	t	2023-03-20	f
FB000144	Saya pribadi telah memeriksa surat izin ini dan juga rincian peralatan / daerah / benda tersebut diatas.	CHECKBOX	2	2	155	FB000141	t	2023-03-20	f
FB000146	Saya mengerti sifat dan lingkup dari tugas.	CHECKBOX	2	3	156	FB000141	t	2023-03-20	f
FB000148	Saya yakin bahwa tugas ini bisa dilakukan dengan aman.	CHECKBOX	2	4	157	FB000141	t	2023-03-20	f
FB000150	Tanggung Jawab	HEADER	1	3	158	FH009	f	2023-03-20	f
FB000181	Daftar Tugas dan Nama pekerja diuraikan pada lampiran	FOOTNOTE	1	6	12	FH001	f	2023-03-20	f
FB000155	Hanya orang yang bertanggung jawab langsung untuk melakukan tugas tersebut boleh melepaskan alat LOTOTO, setelah melakukan pemeriksaan Safety lengkap.	CHECKBOX	2	3	161	FB000150	f	2023-03-20	f
FB000157	Saat tugas tersebut selesai, orang yang bertanggung jawab, harus memastikan sendiri bahwa daerah ditinggalkannnya dalam keadaan bersih, rapi &amp; aman.	CHECKBOX	2	4	162	FB000150	t	2023-03-20	f
FB000159	Saya telah memeriksa daerah tempat tugas dilakukan. Saya dengan ini menyatakan bahwa tugas telah dilakukan dengan aman dan daerah ini ditinggalkan dalam keadaan bersih dan rapi.	CHECKBOX	1	1	163	FH010	t	2023-03-20	f
FB000142	Saya mengetahui bahwa tugas yang dimaksud di atas berada dalam daerah tanggung jawab saya.	CHECKBOX	2	1	154	FB000141	t	2023-03-20	f
FB000080	Tahan Bahan Kimia	CHECKBOX	2	2	93	FB000078	f	2023-03-20	f
FB000081	Tahan Panas	CHECKBOX	2	3	94	FB000078	f	2023-03-20	f
FB000082	Tahan Listrik	CHECKBOX	2	4	95	FB000078	f	2023-03-20	f
FB000002	Lokasi Pekerjaan	HEADER	1	2	2	FH001	f	2023-03-20	f
FB000006	Ruang yang akan dimasuki	INPUT	1	3	6	FH001	t	2023-03-20	f
FB000182	Semua peralatan pekerjaan diperiksa oleh Penanggung jawab kerja (Petugas K3/Safety Officer).	FOOTNOTE	1	5	18	FH002	f	2023-03-20	f
FB000183	Pengujian Atmosfer selanjutnya untuk dicatat pada Lembar hasil pengujian Atmosfer tambahan	FOOTNOTE	1	9	27	FH003	f	2023-03-20	f
FB000022	Partikel Terbang atau Percikan Api	CHECKBOX	1	3	30	FH004	f	2023-03-20	f
FB000050	Penopang untuk pondasi	CHECKBOX	1	4	57	FH005	f	2023-03-20	f
FB000056	Peralatan pekerjaan dinaikkan secara aman &amp; terpisah dari pekerja/operator yang bekerja di ketinggian	CHECKBOX	1	12	65	FH005	f	2023-03-20	f
FB000184	Lampirkan Surat Izin Kerja Pekerjaan Ruang Terbatas apabila penggalian memerlukan Izin Kerja Ruang Terbatas	FOOTNOTE	1	21	74	FH005	f	2023-03-20	f
FB000185	Untuk perancah berpindah; 1) posisi roda harus terkunci saat digunakan, 2) dilarang memindahkan/menggeser perancah saat masih ada pekerja di atas perancah	FOOTNOTE	1	22	75	FH005	f	2023-03-20	f
FB000186	Semua sistem yang relevan telah diisolasi dan dikunci serta ditandai sesuai dengan kebijakan INALUM.	FOOTNOTE	1	3	80	FH006	f	2023-03-20	f
FB000187	Seluruh peralatan keselamatan yang diperlukan harus disiapkan sebelum memulai pekerjaan dan diperiksa oleh petugas K3	FOOTNOTE	1	21	146	FH008	f	2023-03-20	f
FB000131	Anak buah saya dan saya telah menerima pelatihan Induksi K3 dan kami mengetahui Perlindungan Safety yang diperlukan.	CHECKBOX	2	1	148	FB000130	t	2023-03-20	f
FB000153	Orang yang bertanggung jawab langsung untuk melakukan tugas harus tersebut, harus me-LOTOTO sendiri peralatan/permesinan yang terkait dan memegang kunci LOTOTO sendiri.	CHECKBOX	2	2	160	FB000150	f	2023-03-20	f
\.


--
-- Data for Name: md_form_header; Type: TABLE DATA; Schema: sika; Owner: inalum
--

COPY sika.md_form_header (id_form_header, nm_form_header, is_deleted, tgl_insert) FROM stdin;
FH001	Informasi Pekerjaan	f	2023-01-05
FH002	Peralatan Pekerjaan	f	2023-01-05
FH003	Pemantauan Atmosfer	f	2023-01-05
FH004	Identifikasi Bahaya	f	2023-01-05
FH005	Persiapan Pekerjaan	f	2023-01-05
FH006	Verifikasi Isolasi	f	2023-01-05
FH007	Alat Pelindung Diri	f	2023-01-05
FH008	Kesiapsiagaan Darurat	f	2023-01-05
FH009	Persetujuan	f	2023-01-05
FH010	Inspeksi Penyelesaian	f	2023-01-05
\.


--
-- Data for Name: md_jenis_sika; Type: TABLE DATA; Schema: sika; Owner: inalum
--

COPY sika.md_jenis_sika (id_jenis, nm_jenis, no_dokumen, judul, link_menu, is_deleted, tgl_insert) FROM stdin;
ad28f05869	Panas	SSM-FR19-001/0	Surat Izin Kerja Pekerjaan Panas	panas	f	2023-01-05
9a75badfd8	Ruang Terbatas	SSM-FR19-002/0	Surat Izin Kerja Pekerjaan Ruang Terbatas	ruang_terbatas	f	2023-01-05
12d9a40b86	Listrik	SSM-FR19-003/0	Surat Izin Kerja Pekerjaan Listrik	listrik	f	2023-01-05
0f7553aa4e	Penggalian	SSM-FR19-004/0	Surat Izin Kerja Pekerjaan Penggalian	penggalian	f	2023-01-05
5bbae6a23e	Ketinggian	SSM-FR19-005/0	Surat Izin Kerja Pekerjaan Ketinggian	ketinggian	f	2023-01-05
\.


--
-- Data for Name: md_menu; Type: TABLE DATA; Schema: sika; Owner: inalum
--

COPY sika.md_menu (id_menu, nm_menu, icon_menu, link_menu, id_parent, status, level, urut, urut_global, tgl_insert) FROM stdin;
MN000032	Test 4			MN000031	A	3	1	29	2023-04-04 08:01:10.544305
MN000001	MAIN MENU			0	A	0	1	1	2023-01-05 15:00:59.528499
MN000002	Menu			MN000001	A	1	1	2	2023-01-05 15:00:59.528499
MN000003	Dashboard	<i class="ri-bar-chart-2-line"></i>	admin/dashboard	MN000002	A	2	1	3	2023-01-05 15:00:59.528499
MN000004	Izin Kerja			MN000001	A	1	2	5	2023-01-05 15:00:59.528499
MN000005	Panas	<i class=" ri-temp-hot-line"></i>	admin/trans/izin_kerja/panas	MN000004	A	2	1	6	2023-01-05 15:00:59.528499
MN000006	Ruang Terbatas	<i class="ri-building-line"></i>	admin/trans/izin_kerja/ruang_terbatas	MN000004	A	2	2	7	2023-01-05 15:00:59.528499
MN000007	Listrik	<i class="ri-flashlight-line"></i>	admin/trans/izin_kerja/listrik	MN000004	A	2	3	8	2023-01-05 15:00:59.528499
MN000008	Penggalian	<i class="ri-barricade-line"></i>	admin/trans/izin_kerja/penggalian	MN000004	A	2	4	9	2023-01-05 15:00:59.528499
MN000009	Ketinggian	<i class="ri-rocket-line"></i>	admin/trans/izin_kerja/ketinggian	MN000004	A	2	5	10	2023-01-05 15:00:59.528499
MN000010	Master Data			MN000001	A	1	3	11	2023-01-05 15:00:59.528499
MN000015	Daftar User	<i class="ri-user-3-line"></i>	admin/master/user	MN000010	A	2	1	12	2023-01-05 15:00:59.528499
MN000014	User Management	<i class="ri-user-settings-line"></i>	user	MN000010	A	2	2	13	2023-01-05 15:00:59.528499
MN000016	Role		admin/master/role	MN000014	A	3	1	14	2023-01-05 15:00:59.528499
MN000017	Permission		admin/master/permission	MN000014	A	3	2	15	2023-01-05 15:00:59.528499
MN000018	Permission Private		admin/master/permission/private	MN000014	A	3	3	16	2023-01-05 15:00:59.528499
MN000011	Menu Management	<i class="ri-menu-2-line"></i>	menu	MN000010	A	2	3	17	2023-01-05 15:00:59.528499
MN000012	Menu List		admin/master/menu	MN000011	A	3	1	18	2023-01-05 15:00:59.528499
MN000013	Menu Action		admin/master/action	MN000011	A	3	2	19	2023-01-05 15:00:59.528499
MN000027	Daftar Seksi	<i class="ri-team-line"></i>	admin/master/seksi	MN000010	A	2	4	20	2023-01-05 15:00:59.528499
MN000028	Daftar Perusahaan	<i class="ri-hotel-line"></i>	admin/master/perusahaan	MN000010	A	2	5	21	2023-01-05 15:00:59.528499
MN000019	Form Management			MN000001	A	1	4	22	2023-01-05 15:00:59.528499
MN000021	Jenis SIKA	<i class="ri-list-ordered"></i>	admin/master/jenis	MN000019	A	2	1	23	2023-01-05 15:00:59.528499
MN000022	Form Header	<i class="ri-layout-top-2-line"></i>	admin/master/form_header	MN000019	A	2	2	24	2023-01-05 15:00:59.528499
MN000023	Form Body	<i class="ri-layout-bottom-2-line"></i>	admin/master/form_body	MN000019	A	2	3	25	2023-01-05 15:00:59.528499
MN000024	Form Relation	<i class="ri-file-copy-2-line"></i>	admin/master/form_relation	MN000019	A	2	4	26	2023-01-05 15:00:59.528499
MN000033	Generate Report	<i class="ri-file-excel-line"></i>	admin/trans/report	MN000002	N	2	2	4	2023-05-23 15:03:06.340248
\.


--
-- Data for Name: md_role; Type: TABLE DATA; Schema: sika; Owner: inalum
--

COPY sika.md_role (id_role, nm_role, status, is_deleted, tgl_insert) FROM stdin;
RS001	Super Administrator	A	f	2023-01-05
RS002	Administrator	A	f	2023-01-05
RS003	Kontraktor	A	f	2023-01-05
RS004	Seksi	A	f	2023-01-05
RS005	Manager	A	f	2023-01-05
RS006	VP	A	f	2023-01-05
\.


--
-- Data for Name: md_seksi; Type: TABLE DATA; Schema: sika; Owner: inalum
--

COPY sika.md_seksi (id_seksi, nm_seksi, alias_seksi, jenis, is_deleted, tgl_insert) FROM stdin;
S0000	DEFAULT	DEFAULT	DEFAULT	f	2023-01-05
S0001	Smelter Public Relation Section	SPR	SEKSI	f	2023-01-05
S0002	Smelter Internal Audit Section	SIA	SEKSI	f	2023-01-05
S0003	Power Public Relation Section	PPR	SEKSI	f	2023-01-05
S0004	Smelter Risk Management Section	SIR	SEKSI	f	2023-01-05
S0005	Smelter Risk Management Section	SRM	SEKSI	f	2023-01-05
S0006	Smelter Good Corporate Governance Section	SCG	SEKSI	f	2023-01-05
S0007	Smelter Legal Section	SLA	SEKSI	f	2023-01-05
S0008	Smelter Business Development Section	SBD	SEKSI	f	2023-01-05
S0009	Smelter Project Preparation Section	SPP	SEKSI	f	2023-01-05
S0010	Smelter Marketing & Hedging Section	SMH	SEKSI	f	2023-01-05
S0011	Smelter Sales Section	SSS	SEKSI	f	2023-01-05
S0012	Smelter CPC Plant Project Section	SBC	SEKSI	f	2023-01-05
S0013	Smelter Invindo Project Section	SIP	SEKSI	f	2023-01-05
S0014	Smelter Reduction Preparation Section	SRP	SEKSI	f	2023-01-05
S0015	Smelter Reduction Operation Section	SRO	SEKSI	f	2023-01-05
S0016	Smelter Casting Section	SCA	SEKSI	f	2023-01-05
S0017	Smelter Carbon Operation Section	SCO	SEKSI	f	2023-01-05
S0018	Smelter Carbon Preparation Section	SCP	SEKSI	f	2023-01-05
S0019	Smelter Service & Workshop Section	SSW	SEKSI	f	2023-01-05
S0020	Smelter Maintenance Plant One (1) Section	SMO	SEKSI	f	2023-01-05
S0021	Smelter Maintenance Plant Two (2) Section	SMT	SEKSI	f	2023-01-05
S0022	Smelter Electric Supply Section	SES	SEKSI	f	2023-01-05
S0023	Smelter Process Engineering Section	SPE	SEKSI	f	2023-01-05
S0024	Smelter Equipment Engineering Section	SEE	SEKSI	f	2023-01-05
S0025	Smelter Quality Assurance Section	SQA	SEKSI	f	2023-01-05
S0026	Power Operation Section	POP	SEKSI	f	2023-01-05
S0027	Power Civil Work & Transmission Line Section	PCT	SEKSI	f	2023-01-05
S0028	Power Maintenance Section	PMN	SEKSI	f	2023-01-05
S0029	Power Technical Development & Engineering Section	PTE	SEKSI	f	2023-01-05
S0030	Smelter Safety & Quality Management System Section	SSM	SEKSI	f	2023-01-05
S0031	Smelter Environment Protection Section	SEP	SEKSI	f	2023-01-05
S0032	Smelter Human Capital Training & Development Section	SHD	SEKSI	f	2023-01-05
S0033	Smelter Human Capital System Section	SHS	SEKSI	f	2023-01-05
S0034	Smelter Human Capital Administration & Welfare Section	SHW	SEKSI	f	2023-01-05
S0035	Power Environmental Sustainability Section	PES	SEKSI	f	2023-01-05
S0036	Power Administration Section	PAS	SEKSI	f	2023-01-05
S0037	Smelter General Affairs Section	SGA	SEKSI	f	2023-01-05
S0038	Smelter Security Section	SSC	SEKSI	f	2023-01-05
S0039	Smelter Health Service Section	SHL	SEKSI	f	2023-01-05
S0040	Smelter Community Development Section	SCD	SEKSI	f	2023-01-05
S0041	Power Community Development Section	PCD	SEKSI	f	2023-01-05
S0042	Smelter Spare-parts Warehouse Section	SWH	SEKSI	f	2023-01-05
S0043	Smelter Material & Berth Operation Section	SMB	SEKSI	f	2023-01-05
S0044	Smelter Planning Section	SPN	SEKSI	f	2023-01-05
S0045	Smelter Budget Planning Section	SBP	SEKSI	f	2023-01-05
S0046	Power Budgeting & Finance Section	PBF	SEKSI	f	2023-01-05
S0047	Smelter Accounting Section	SAS	SEKSI	f	2023-01-05
S0048	Smelter Tax Section	STX	SEKSI	f	2023-01-05
S0049	Smelter Finance & Treasury Section	SFT	SEKSI	f	2023-01-05
S0050	Smelter Technology Information Section	SIT	SEKSI	f	2023-01-05
S0051	Smelter Material & Operational Procurement Section	SPM	SEKSI	f	2023-01-05
S0052	Smelter Vendor & Procurement Planning Section	SPV	SEKSI	f	2023-01-05
S0053	Smelter Procurement Services Section	SPS	SEKSI	f	2023-01-05
S0054	Smelter General Affairs Section-Tanjung Gading	SGA-TO	SEKSI	f	2023-01-05
S0055	Smelter Procurement Services Section-Paritohan	SPS-IPP	SEKSI	f	2023-01-05
S0056	Smelter Health Service Section-Paritohan	SHL-IPP	SEKSI	f	2023-01-05
S0057	Smelter Spare-parts Warehouse Section-Paritohan	SWH-IPP	SEKSI	f	2023-01-05
S0058	Smelter Environment Protection Section-Paritohan	SEP-IPP	SEKSI	f	2023-01-05
S0059	Liaison Office, Medan	IMO	SEKSI	f	2023-01-05
S0060	PMO-Problem Asset	PMO-Problem Asset	SEKSI	f	2023-01-05
S0061	P2K3-IPP	P2K3-IPP	SEKSI	f	2023-01-05
S0062	P2K3-ISP	P2K3-ISP	SEKSI	f	2023-01-05
S0063	IMO-MESS	IMO-MESS	SEKSI	f	2023-01-05
S0064	PT. Berca Hardayaperkasa	PT. Berca Hardayaperkasa	PERUSAHAAN	f	2023-01-05
S0065	PT. Mitra Integrasi Informatika	PT. Mitra Integrasi Informatika	PERUSAHAAN	f	2023-01-18
S0066	PT. Coba Coba	PT. Coba Coba	PERUSAHAAN	f	2023-01-20
S0067	PT. Test	PT. Test	PERUSAHAAN	f	2023-03-03
S0068	asdfasdf	asdfasdf	PERUSAHAAN	f	2023-03-03
\.


--
-- Data for Name: md_user; Type: TABLE DATA; Schema: sika; Owner: inalum
--

COPY sika.md_user (id_user, nama, username, email, password, id_seksi, id_role, status, is_deleted, tgl_insert) FROM stdin;
7389d4a3816bc4d9dbc12cbf4efcc6	Super Administrator	super	ssm_reminder@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0000	RS001	1	f	2023-01-05
ec9b2932d4c157137e800a8142b1af	Nama Operator/Staff SIT	sit	ssm_reminder@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0050	RS004	1	f	2023-01-05
03a2e2419a61806d176e1a88c0d73a	Nama Manager SIT	m_sit	ssm_reminder@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0050	RS005	1	f	2023-01-05
7c917310bae92b3a85cd92234eccb8	Nama VP SIT	vp_sit	ssm_reminder@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0050	RS006	1	f	2023-01-05
23e634f2e67d0ce3f2214b3f37e601	Nama VP SSM	vp_ssm	ssm_reminder@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0030	RS006	1	f	2023-01-05
3e37a573e6e0e264c0fabd42683243	Nama Operator/Staff SSM	ssm	ssm_reminder@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0030	RS004	1	f	2023-01-05
66b69cd45a0c0a23a6ba5d5977f05e	Nama Manager SSM	m_ssm	ssm_reminder@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0030	RS005	1	f	2023-01-05
0e2fe9901d0242e3dce03510a7052a	Nama Staff SIT 2	sit2	mawan@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0050	RS004	1	t	2023-01-24
87c996b7e5c55141f389ca8da94ab4	Nama Operator/Staff SGA	sga	ssm_reminder@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0037	RS004	0	f	2023-01-18
d3500e51ddf0178f1cf560adc5bebd	Nama VP SGA	vp_sga	ssm_reminder@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0037	RS006	0	f	2023-01-18
cad5387c3b811c3b56c516f1048f28	test	admin2	ssm_reminder@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0030	RS002	1	f	2023-02-28
4c439ce9925c27468def14c803c666	Nama Administrator	admin	ssm_reminder@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0030	RS002	1	f	2023-01-05
7c64238b3b6cd8b92cd96d8ad11632	Nama Kontraktor MII	mii		8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0065	RS003	0	f	2023-01-18
677aa0fee0cb38fd7cf384e29b3efb	Test	test		8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0066	RS003	0	t	2023-01-20
1598d343041d67295cc0fb52c35489	Test 2	test2		8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0067	RS003	1	f	2023-03-03
de51a03853b903f6d3f695167cd023	asdf	asdf		8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0068	RS003	1	f	2023-03-03
6bbed62adf533c55401029daf84fa5	Nama Kontraktor PT. Berca	berca		8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0064	RS003	1	f	2023-01-05
ff6410053819afc236a1a071de05bb	Nama Manager SGA	m_sga	ssm_reminder@inalum.id	8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918	S0037	RS005	1	f	2023-01-18
\.


--
-- Data for Name: tr_izin_kerja; Type: TABLE DATA; Schema: sika; Owner: inalum
--

COPY sika.tr_izin_kerja (id_izin_kerja, id_jenis, nomor_izin, tgl_berlaku, jam_berlaku_mulai, jam_berlaku_akhir, catatan, requester, tgl_requester, pj_kerja, tgl_pj_kerja, pj_lokasi, tgl_pj_lokasi, status, is_deleted, tgl_insert, alasan) FROM stdin;
b54665cb812e987	ad28f05869	PA-SSM-0013-2023	2023-01-07	12:00:00	12:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-01-11	66b69cd45a0c0a23a6ba5d5977f05e	\N	23e634f2e67d0ce3f2214b3f37e601	\N	REQUESTED	f	2023-01-11	\N
018e7c52f853790	ad28f05869	PA-SIT-0006-2023	2023-01-26	11:00:00	15:00:00		6bbed62adf533c55401029daf84fa5	2023-01-24	03a2e2419a61806d176e1a88c0d73a	2023-02-28	7c917310bae92b3a85cd92234eccb8	2023-02-28	DONE2	f	2023-01-24	\N
f82dae290502e70	9a75badfd8	RT-SIT-0001-2023	2023-01-07	12:00:00	12:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-01-26	03a2e2419a61806d176e1a88c0d73a	2023-02-28	66b69cd45a0c0a23a6ba5d5977f05e	\N	REJECTED	f	2023-01-26	alasan tolak minimal 20 karakter
5863d9a6b1cc3c0	12d9a40b86	LS-SGA-0002-2023	2023-01-21	12:00:00	12:00:00		87c996b7e5c55141f389ca8da94ab4	2023-01-24	ff6410053819afc236a1a071de05bb	2023-01-24	66b69cd45a0c0a23a6ba5d5977f05e	2023-01-24	DONE2	f	2023-01-24	\N
0240fe6e0754b07	ad28f05869	PA-SSM-0012-2023	2023-01-28	12:00:00	12:00:00	ffdf fdfdf dfdf	7389d4a3816bc4d9dbc12cbf4efcc6	2023-01-11	66b69cd45a0c0a23a6ba5d5977f05e	\N	03a2e2419a61806d176e1a88c0d73a	\N	REQUESTED	f	2023-01-11	\N
8aadf546dcb410a	ad28f05869	PA-SSM-0008-2023	2023-01-26	12:00:00	12:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-25	66b69cd45a0c0a23a6ba5d5977f05e	2023-01-25	d3500e51ddf0178f1cf560adc5bebd	\N	REJECTED	f	2023-01-25	contoh alasan
af8b00d596b2ead	ad28f05869	PA-SIT-0010-2023	2023-01-25	12:00:00	14:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-11	03a2e2419a61806d176e1a88c0d73a	\N	03a2e2419a61806d176e1a88c0d73a	\N	REQUESTED	f	2023-01-11	ga senang?
0b2423cc8bd003e	5bbae6a23e	KT-SGA-0001-2023	2023-01-16	10:00:00	14:00:00	Perbaiki koneksi agar lebih cepat 1 Gbps	6bbed62adf533c55401029daf84fa5	2023-01-13	ff6410053819afc236a1a071de05bb	2023-03-21	7c917310bae92b3a85cd92234eccb8	2023-03-21	DONE2	f	2023-01-13	\N
2fe1398eace89cf	12d9a40b86	LS-SIT-0003-2023	2023-01-14	09:00:00	15:00:00	catatan lain	7389d4a3816bc4d9dbc12cbf4efcc6	2023-01-10	03a2e2419a61806d176e1a88c0d73a	\N	03a2e2419a61806d176e1a88c0d73a	\N	REQUESTED	f	2023-01-10	\N
9f11942b3d2ffc8	ad28f05869	PA-SIT-0018-2023	2023-01-14	12:00:00	12:00:00		ec9b2932d4c157137e800a8142b1af	2023-01-25	7c917310bae92b3a85cd92234eccb8	2023-01-31	03a2e2419a61806d176e1a88c0d73a	2023-02-28	DONE2	f	2023-01-25	\N
6fdb8baf0bac546	9a75badfd8	RT-SSM-0007-2023	2023-01-07	09:00:00	12:00:00	asdf asdf asdf asdf asdf 	7389d4a3816bc4d9dbc12cbf4efcc6	2023-01-10	23e634f2e67d0ce3f2214b3f37e601	\N	7c917310bae92b3a85cd92234eccb8	\N	REQUESTED	f	2023-01-10	auto enter
3aa7a14111037bd	12d9a40b86	LS-SSM-0006-2023	2023-01-07	11:00:00	12:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-17	66b69cd45a0c0a23a6ba5d5977f05e	\N	7c917310bae92b3a85cd92234eccb8	\N	REQUESTED	f	2023-01-17	no
69a7b900708685c	0f7553aa4e	PG-SIT-0005-2023	2023-01-21	07:00:00	10:00:00		6bbed62adf533c55401029daf84fa5	2023-01-26	7c917310bae92b3a85cd92234eccb8	\N	ff6410053819afc236a1a071de05bb	\N	REQUESTED	f	2023-01-26	\N
6e798c129a380f0	9a75badfd8	RT-SGA-0003-2023	2023-01-18	12:00:00	12:00:00		6bbed62adf533c55401029daf84fa5	2023-01-16	ff6410053819afc236a1a071de05bb	\N	7c917310bae92b3a85cd92234eccb8	\N	REQUESTED	f	2023-01-16	\N
7cb96acccc53861	9a75badfd8	RT-SIT-0005-2023	2023-01-07	12:00:00	12:00:00	asdf asdfasdf asdf asdfasdf asdfasd	7389d4a3816bc4d9dbc12cbf4efcc6	2023-01-10	03a2e2419a61806d176e1a88c0d73a	\N	23e634f2e67d0ce3f2214b3f37e601	\N	REQUESTED	f	2023-01-10	\N
b5156a492f2838f	0f7553aa4e	PG-SIT-0004-2023	2023-01-07	11:00:00	13:00:00	catatan	6bbed62adf533c55401029daf84fa5	2023-01-18	03a2e2419a61806d176e1a88c0d73a	\N	03a2e2419a61806d176e1a88c0d73a	\N	REQUESTED	f	2023-01-18	\N
9462387ae8d3621	5bbae6a23e	KT-SIT-0006-2023	2023-01-07	10:00:00	14:00:00	fdfdsfsdf sdfsdfsdf sdf sdf sdfsdfsdsdf sdf sdf	7389d4a3816bc4d9dbc12cbf4efcc6	2023-01-11	03a2e2419a61806d176e1a88c0d73a	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	f	2023-01-11	\N
516f43df8a5743f	ad28f05869	PA-SIT-0016-2023	2023-02-11	10:00:00	14:00:00		ec9b2932d4c157137e800a8142b1af	2023-02-28	03a2e2419a61806d176e1a88c0d73a	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	f	2023-02-28	\N
8b6609172fd12fc	ad28f05869	PA-SIT-0014-2023	2023-01-28	12:00:00	12:00:00		ec9b2932d4c157137e800a8142b1af	2023-01-17	03a2e2419a61806d176e1a88c0d73a	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	f	2023-01-17	\N
eb63f2951d3241c	0f7553aa4e	PG-SSM-0006-2023	2023-01-14	08:00:00	15:00:00	asdf asdfdfs sdf asdf asdf	7389d4a3816bc4d9dbc12cbf4efcc6	2023-01-11	23e634f2e67d0ce3f2214b3f37e601	\N	03a2e2419a61806d176e1a88c0d73a	\N	REQUESTED	f	2023-01-11	\N
38e8f73d4bb470e	9a75badfd8	RT-SGA-0006-2023	2023-01-21	13:00:00	14:00:00	hahahahahaha	87c996b7e5c55141f389ca8da94ab4	2023-01-18	ff6410053819afc236a1a071de05bb	\N	d3500e51ddf0178f1cf560adc5bebd	\N	REQUESTED	f	2023-01-18	\N
f59d5c02aab19a8	12d9a40b86	LS-SSM-0003-2023	2023-01-14	12:00:00	12:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-01-26	66b69cd45a0c0a23a6ba5d5977f05e	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	t	2023-01-26	\N
cb93caf3102bb4e	ad28f05869	PA-SGA-0022-2023	2023-01-28	11:00:00	13:00:00		87c996b7e5c55141f389ca8da94ab4	2023-01-27	ff6410053819afc236a1a071de05bb	2023-01-27	23e634f2e67d0ce3f2214b3f37e601	2023-01-27	DONE2	f	2023-01-27	\N
79b3763ea9e6b7b	9a75badfd8	RT-SGA-0008-2023	2023-01-28	10:00:00	15:00:00	Ruang server kurang dingin, pasang beberapa AC baru.	7c64238b3b6cd8b92cd96d8ad11632	2023-01-18	ff6410053819afc236a1a071de05bb	\N	7c917310bae92b3a85cd92234eccb8	\N	DONE2	f	2023-01-18	\N
c91d2c29b9f194e	0f7553aa4e	PG-SGA-0002-2023	2023-01-21	12:00:00	12:00:00	agasdf asdfasdfasdf	87c996b7e5c55141f389ca8da94ab4	2023-01-26	ff6410053819afc236a1a071de05bb	2023-03-21	03a2e2419a61806d176e1a88c0d73a	2023-03-21	DONE2	f	2023-01-26	\N
3242b99cb7b2c6b	ad28f05869	PA-SSM-0024-2023	2023-03-11	12:00:00	12:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-03-28	23e634f2e67d0ce3f2214b3f37e601	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	t	2023-03-28	\N
0f9b0f7045f3d1b	ad28f05869	PA-SSM-0024-2023	2023-03-11	12:00:00	12:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-03-28	23e634f2e67d0ce3f2214b3f37e601	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	t	2023-03-28	\N
786de8f9cc81c61	ad28f05869	PA-SSM-0024-2023	2023-03-11	12:00:00	12:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-03-28	23e634f2e67d0ce3f2214b3f37e601	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	t	2023-03-28	\N
64a438894a4bd74	ad28f05869	PA-SIT-0023-2023	2023-03-10	12:00:00	12:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-03-28	03a2e2419a61806d176e1a88c0d73a	\N	03a2e2419a61806d176e1a88c0d73a	\N	REQUESTED	f	2023-03-28	\N
61a311ce254b33c	ad28f05869	PA-SIT-0019-2023	2023-01-14	12:00:00	12:00:00		ec9b2932d4c157137e800a8142b1af	2023-01-25	03a2e2419a61806d176e1a88c0d73a	\N	ff6410053819afc236a1a071de05bb	\N	REQUESTED	f	2023-01-25	ada ad ad 7 iujd kj kj jkl8
6f7d23e0b70ae23	ad28f05869	PA-SGA-0002-2023	2023-01-21	12:00:00	12:00:00		87c996b7e5c55141f389ca8da94ab4	2023-01-19	d3500e51ddf0178f1cf560adc5bebd	\N	7c917310bae92b3a85cd92234eccb8	\N	REQUESTED	f	2023-01-19	\N
4d65aee4d77f1ac	ad28f05869	PA-SIT-0005-2023	2023-01-14	12:00:00	12:00:00		6bbed62adf533c55401029daf84fa5	2023-01-23	7c917310bae92b3a85cd92234eccb8	2023-01-24	ff6410053819afc236a1a071de05bb	2023-01-24	DONE2	f	2023-01-23	\N
d18e67b456f8250	0f7553aa4e	PG-SIT-0007-2023	2023-01-28	10:00:00	12:00:00	asdf asdf asdf asdf 	7389d4a3816bc4d9dbc12cbf4efcc6	2023-01-11	03a2e2419a61806d176e1a88c0d73a	\N	23e634f2e67d0ce3f2214b3f37e601	\N	REQUESTED	f	2023-01-11	\N
d57a36c60639b07	ad28f05869	PA-SSM-0004-2023	2023-01-14	09:00:00	14:00:00	Biar ruang server makin dingin	6bbed62adf533c55401029daf84fa5	2023-01-16	66b69cd45a0c0a23a6ba5d5977f05e	\N	7c917310bae92b3a85cd92234eccb8	\N	REQUESTED	f	2023-01-16	\N
833c802892df8e4	ad28f05869	PA-SSM-0007-2023	2023-01-07	12:00:00	12:00:00		6bbed62adf533c55401029daf84fa5	2023-01-16	23e634f2e67d0ce3f2214b3f37e601	\N	23e634f2e67d0ce3f2214b3f37e601	\N	REQUESTED	f	2023-01-16	\N
d3fee1dc2f2ea5a	ad28f05869	PA-SSM-0017-2023	2023-01-06	12:00:00	12:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-25	66b69cd45a0c0a23a6ba5d5977f05e	\N	ff6410053819afc236a1a071de05bb	\N	REQUESTED	f	2023-01-25	\N
dda352919cf81b9	ad28f05869	PA-SSM-0011-2023	2023-02-04	12:00:00	12:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-01-11	23e634f2e67d0ce3f2214b3f37e601	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	f	2023-01-11	\N
9374709c447b63e	ad28f05869	PA-SSM-0020-2023	2023-01-07	12:00:00	12:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-19	23e634f2e67d0ce3f2214b3f37e601	\N	03a2e2419a61806d176e1a88c0d73a	\N	REQUESTED	f	2023-01-19	\N
cc5ef893d60564e	ad28f05869	PA-SGA-0021-2023	2023-01-14	09:00:00	15:00:00		87c996b7e5c55141f389ca8da94ab4	2023-01-26	d3500e51ddf0178f1cf560adc5bebd	\N	7c917310bae92b3a85cd92234eccb8	\N	REQUESTED	f	2023-01-26	\N
eaf21d3b2163396	ad28f05869	PA-SSM-0024-2023	2023-03-11	12:00:00	12:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-03-28	23e634f2e67d0ce3f2214b3f37e601	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	t	2023-03-28	\N
60e8137cd105aac	ad28f05869	PA-SSM-0009-2023	2023-01-21	15:00:00	23:00:00	Masak banyak untuk seluruh pegawai inalum dan kontraktor, tapi siapa cepat dia dapat.	3e37a573e6e0e264c0fabd42683243	2023-01-12	66b69cd45a0c0a23a6ba5d5977f05e	2023-01-25	d3500e51ddf0178f1cf560adc5bebd	2023-01-25	DONE2	f	2023-01-12	\N
45e1a224d677912	12d9a40b86	LS-SIT-0005-2023	2023-01-13	12:00:00	12:00:00	hahaha ah ah ah ahah ahahah	ec9b2932d4c157137e800a8142b1af	2023-01-25	03a2e2419a61806d176e1a88c0d73a	2023-01-25	ff6410053819afc236a1a071de05bb	2023-01-25	DONE2	f	2023-01-25	\N
d7c54a5b9abad62	5bbae6a23e	KT-SSM-0005-2023	2023-01-14	12:00:00	13:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-23	23e634f2e67d0ce3f2214b3f37e601	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	f	2023-01-23	\N
17eaf519e90a861	12d9a40b86	LS-SGA-0004-2023	2023-01-07	12:00:00	12:00:00		87c996b7e5c55141f389ca8da94ab4	2023-01-26	ff6410053819afc236a1a071de05bb	\N	23e634f2e67d0ce3f2214b3f37e601	\N	REQUESTED	f	2023-01-26	\N
ee5f00d62b72cc4	ad28f05869	PA-SIT-0015-2023	2023-01-07	12:00:00	12:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-11	03a2e2419a61806d176e1a88c0d73a	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	f	2023-01-11	\N
14d840e24d2b510	ad28f05869	PA-SIT-0023-2023	2023-01-28	12:00:00	12:00:00		ec9b2932d4c157137e800a8142b1af	2023-01-25	03a2e2419a61806d176e1a88c0d73a	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	t	2023-01-25	\N
1c84142c16881cc	0f7553aa4e	PG-SSM-0001-2023	2023-01-21	11:00:00	12:00:00	 asdf asdf asdf asdfasdf asdf asdf asdf asdf asdf asf asfasf asf asdf sadf sadf wfef asdf wef sadfqewf asdf asdfwefsadfwf asdf asdf asf 2ef awdf asdfsdf	7c64238b3b6cd8b92cd96d8ad11632	2023-01-26	66b69cd45a0c0a23a6ba5d5977f05e	\N	03a2e2419a61806d176e1a88c0d73a	\N	REQUESTED	f	2023-01-26	\N
56e801ace315645	9a75badfd8	RT-SSM-0004-2023	2023-01-07	12:00:00	12:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-23	66b69cd45a0c0a23a6ba5d5977f05e	\N	d3500e51ddf0178f1cf560adc5bebd	\N	REQUESTED	f	2023-01-23	\N
5ed20f212f6ee2e	5bbae6a23e	KT-SSM-0008-2023	2023-03-04	12:00:00	12:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-03-28	66b69cd45a0c0a23a6ba5d5977f05e	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	f	2023-03-28	\N
1db69953125e16b	5bbae6a23e	KT-SIT-0007-2023	2023-01-14	12:00:00	10:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-01-11	03a2e2419a61806d176e1a88c0d73a	\N	23e634f2e67d0ce3f2214b3f37e601	\N	REQUESTED	f	2023-01-11	\N
13d1622cccdd6f8	ad28f05869	PA-SSM-0024-2023	2023-03-11	12:00:00	12:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-03-28	23e634f2e67d0ce3f2214b3f37e601	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	t	2023-03-28	\N
d83ee99561cd80e	ad28f05869	PA-SSM-0024-2023	2023-03-11	12:00:00	12:00:00		7389d4a3816bc4d9dbc12cbf4efcc6	2023-03-28	23e634f2e67d0ce3f2214b3f37e601	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	t	2023-03-28	\N
4f2fbccd8fe180e	5bbae6a23e	KT-SSM-0002-2023	2023-01-17	12:00:00	12:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-23	23e634f2e67d0ce3f2214b3f37e601	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	f	2023-01-23	\N
d9e06f529132f2f	5bbae6a23e	KT-SSM-0003-2023	2023-01-07	12:00:00	12:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-23	23e634f2e67d0ce3f2214b3f37e601	\N	03a2e2419a61806d176e1a88c0d73a	\N	REQUESTED	f	2023-01-23	\N
a7ea3555954abf0	5bbae6a23e	KT-SSM-0004-2023	2023-01-07	12:00:00	12:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-23	23e634f2e67d0ce3f2214b3f37e601	\N	03a2e2419a61806d176e1a88c0d73a	\N	REQUESTED	f	2023-01-23	\N
e20ea5469778607	0f7553aa4e	PG-SSM-0003-2023	2023-01-07	12:00:00	12:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-23	66b69cd45a0c0a23a6ba5d5977f05e	\N	d3500e51ddf0178f1cf560adc5bebd	\N	REQUESTED	f	2023-01-23	\N
53a913b17aa7190	9a75badfd8	RT-SSM-0002-2023	2023-01-14	12:00:00	12:00:00		3e37a573e6e0e264c0fabd42683243	2023-01-23	66b69cd45a0c0a23a6ba5d5977f05e	\N	7c917310bae92b3a85cd92234eccb8	\N	REQUESTED	f	2023-01-23	\N
034cce884cd7d6c	12d9a40b86	LS-SGA-0001-2023	2023-01-14	12:00:00	12:00:00		7c64238b3b6cd8b92cd96d8ad11632	2023-01-23	d3500e51ddf0178f1cf560adc5bebd	\N	66b69cd45a0c0a23a6ba5d5977f05e	\N	REQUESTED	f	2023-01-23	\N
1b665affe683f4b	ad28f05869	PA-SGA-0001-2023	2023-01-14	12:00:00	12:00:00		87c996b7e5c55141f389ca8da94ab4	2023-01-19	ff6410053819afc236a1a071de05bb	2023-01-19	23e634f2e67d0ce3f2214b3f37e601	\N	REQUESTED	f	2023-01-19	mana bisa gitu
fc322658e7cb29c	ad28f05869	PA-SGA-0003-2023	2023-01-21	12:00:00	12:00:00		7c64238b3b6cd8b92cd96d8ad11632	2023-01-19	ff6410053819afc236a1a071de05bb	2023-01-19	23e634f2e67d0ce3f2214b3f37e601	\N	REQUESTED	f	2023-01-19	\N
\.


--
-- Name: d_form_relation d_form_relation_pkey; Type: CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_form_relation
    ADD CONSTRAINT d_form_relation_pkey PRIMARY KEY (id_form_relation);


--
-- Name: d_permissions d_permissions_pkey; Type: CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_permissions
    ADD CONSTRAINT d_permissions_pkey PRIMARY KEY (id_permission);


--
-- Name: d_permissions_private d_permissions_private_pkey; Type: CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_permissions_private
    ADD CONSTRAINT d_permissions_private_pkey PRIMARY KEY (id_permission);


--
-- Name: d_relasi_izin_kerja d_relasi_izin_kerja_pkey; Type: CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_relasi_izin_kerja
    ADD CONSTRAINT d_relasi_izin_kerja_pkey PRIMARY KEY (id_relasi_izin_kerja);


--
-- Name: md_action md_action_pkey; Type: CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.md_action
    ADD CONSTRAINT md_action_pkey PRIMARY KEY (id_action);


--
-- Name: md_form_body md_form_body_pkey; Type: CONSTRAINT; Schema: sika; Owner: postgres
--

ALTER TABLE ONLY sika.md_form_body
    ADD CONSTRAINT md_form_body_pkey PRIMARY KEY (id_form_body);


--
-- Name: md_form_header md_form_header_pkey; Type: CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.md_form_header
    ADD CONSTRAINT md_form_header_pkey PRIMARY KEY (id_form_header);


--
-- Name: md_jenis_sika md_jenis_sika_pkey; Type: CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.md_jenis_sika
    ADD CONSTRAINT md_jenis_sika_pkey PRIMARY KEY (id_jenis);


--
-- Name: md_menu md_menu_pkey; Type: CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.md_menu
    ADD CONSTRAINT md_menu_pkey PRIMARY KEY (id_menu);


--
-- Name: md_role md_role_pkey; Type: CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.md_role
    ADD CONSTRAINT md_role_pkey PRIMARY KEY (id_role);


--
-- Name: md_seksi md_seksi_pkey; Type: CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.md_seksi
    ADD CONSTRAINT md_seksi_pkey PRIMARY KEY (id_seksi);


--
-- Name: md_user md_user_pkey; Type: CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.md_user
    ADD CONSTRAINT md_user_pkey PRIMARY KEY (id_user);


--
-- Name: tr_izin_kerja tr_izin_kerja_pkey; Type: CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.tr_izin_kerja
    ADD CONSTRAINT tr_izin_kerja_pkey PRIMARY KEY (id_izin_kerja);


--
-- Name: d_permissions fk_id_action_d_permission; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_permissions
    ADD CONSTRAINT fk_id_action_d_permission FOREIGN KEY (id_action) REFERENCES sika.md_action(id_action) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: d_permissions_private fk_id_action_d_permission; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_permissions_private
    ADD CONSTRAINT fk_id_action_d_permission FOREIGN KEY (id_action) REFERENCES sika.md_action(id_action) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: d_form_relation fk_id_form_header_d_form_relation; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_form_relation
    ADD CONSTRAINT fk_id_form_header_d_form_relation FOREIGN KEY (id_form_header) REFERENCES sika.md_form_header(id_form_header) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: d_relasi_izin_kerja fk_id_izin_kerja_d_relasi_izin_kerja; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_relasi_izin_kerja
    ADD CONSTRAINT fk_id_izin_kerja_d_relasi_izin_kerja FOREIGN KEY (id_izin_kerja) REFERENCES sika.tr_izin_kerja(id_izin_kerja) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: d_form_relation fk_id_jenis_d_form_relation; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_form_relation
    ADD CONSTRAINT fk_id_jenis_d_form_relation FOREIGN KEY (id_jenis) REFERENCES sika.md_jenis_sika(id_jenis) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: tr_izin_kerja fk_id_jenis_tr_izin_kerja; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.tr_izin_kerja
    ADD CONSTRAINT fk_id_jenis_tr_izin_kerja FOREIGN KEY (id_jenis) REFERENCES sika.md_jenis_sika(id_jenis) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: d_permissions fk_id_menu_d_permission; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_permissions
    ADD CONSTRAINT fk_id_menu_d_permission FOREIGN KEY (id_menu) REFERENCES sika.md_menu(id_menu) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: d_permissions_private fk_id_menu_d_permission; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_permissions_private
    ADD CONSTRAINT fk_id_menu_d_permission FOREIGN KEY (id_menu) REFERENCES sika.md_menu(id_menu) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: d_permissions fk_id_role_d_permission; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_permissions
    ADD CONSTRAINT fk_id_role_d_permission FOREIGN KEY (id_role) REFERENCES sika.md_role(id_role) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: md_user fk_id_role_md_user; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.md_user
    ADD CONSTRAINT fk_id_role_md_user FOREIGN KEY (id_role) REFERENCES sika.md_role(id_role) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: md_user fk_id_seksi_md_user; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.md_user
    ADD CONSTRAINT fk_id_seksi_md_user FOREIGN KEY (id_seksi) REFERENCES sika.md_seksi(id_seksi) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: d_permissions_private fk_id_user_d_permission; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.d_permissions_private
    ADD CONSTRAINT fk_id_user_d_permission FOREIGN KEY (id_user) REFERENCES sika.md_user(id_user) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: tr_izin_kerja fk_pj_kerja_id_user_tr_izin_kerja; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.tr_izin_kerja
    ADD CONSTRAINT fk_pj_kerja_id_user_tr_izin_kerja FOREIGN KEY (pj_kerja) REFERENCES sika.md_user(id_user) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: tr_izin_kerja fk_pj_lokasi_id_user_tr_izin_kerja; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.tr_izin_kerja
    ADD CONSTRAINT fk_pj_lokasi_id_user_tr_izin_kerja FOREIGN KEY (pj_lokasi) REFERENCES sika.md_user(id_user) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- Name: tr_izin_kerja fk_requester_id_user_tr_izin_kerja; Type: FK CONSTRAINT; Schema: sika; Owner: inalum
--

ALTER TABLE ONLY sika.tr_izin_kerja
    ADD CONSTRAINT fk_requester_id_user_tr_izin_kerja FOREIGN KEY (requester) REFERENCES sika.md_user(id_user) ON UPDATE CASCADE ON DELETE RESTRICT;


--
-- PostgreSQL database dump complete
--

