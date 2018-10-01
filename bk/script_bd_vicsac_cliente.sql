CREATE DATABASE bd_Vicsac_cliente

-- Table: correlativo

-- DROP TABLE correlativo;

CREATE TABLE correlativo
(
  tabla character varying(100) NOT NULL,
  numero integer NOT NULL,
  CONSTRAINT pk_correlativo PRIMARY KEY (tabla)
);
CREATE TABLE CLIENTE
(
 codigo_id integer not null primary key,
 doc_identidad varchar(10)not null,
 nombre varchar(50)not null,
 apellido_pat varchar(50)not null,
 apellido_mat varchar(50)not null,
 email varchar(150)not null,
 telefono varchar(15)not null,
 mensaje varchar(500)not null
);
alter table CLIENTE alter column doc_identidad type varchar(11);
-- Function: f_generar_correlativo(character varying)

-- DROP FUNCTION f_generar_correlativo(character varying);

CREATE OR REPLACE FUNCTION f_generar_correlativo(p_tabla character varying)
  RETURNS SETOF integer AS
$BODY$
	
	begin
		return query
		select 
			c.numero+1 
		from 
			correlativo c 
		where 
			c.tabla = p_tabla;
	end
	
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100
  ROWS 1000;
ALTER FUNCTION f_generar_correlativo(character varying)
  OWNER TO postgres;


select * from f_generar_correlativo('cliente') as correlativo









insert into cliente (
		    codigo_id, 
		    doc_identidad,
		    nombre,
		    apellido_pat,
		    apellido_mat,
		    email,
		    telefono,
		    mensaje
		    )
	values (
		    1,
		    '45977448',
		    'Renzo',
		    'Ruiz',
		    'Pastor',
		    'renzorp_14@hotamail.com',
		    990557577,
		    'Hola'
		    )





select * from f_generar_correlativo('cliente') as nc



		    select * from f_generar_correlativo('cliente') as correlativo