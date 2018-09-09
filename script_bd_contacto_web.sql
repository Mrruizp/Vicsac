-- Estructura de la Base de datos para recepcionar mensajes de contactos en la página web de VICSAC.
CREATE DATABASE CONTACTO_WEB;
use contacto_web;


CREATE TABLE noticia
(
codigo_noticia integer not null,
titulo_noticia character varying(500)not null,
subtitulo_noticia character varying(500)not null,
fecha_noticia date not null,
descripción_noticia varchar(1000)not null,
constraint pk_codigo_mensaje primary key(codigo_mensaje)
);
CREATE TABLE mensaje
(
codigo_mensaje integer not null,
titulo_noticia character varying(500)not null,
subtitulo_noticia character varying(500)not null,
fecha_noticia date not null,
descripción_noticia varchar(1000)not null,
constraint pk_codigo_mensaje primary key(codigo_mensaje)
);

-- Function: f_generar_correlativo(character varying)

-- DROP FUNCTION f_generar_correlativo(character varying);

CREATE OR REPLACE FUNCTION f_generar_correlativo(p_tabla character varying)
  RETURNS SETOF integer AS
$BODY$
	declare p_tabla alias for $1;
	
	begin
		return query
		select 
			c.numero+1 
		from 
			correlativo c 
		where c.tabla = p_tabla;
	end
	
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100
  ROWS 1000;



CREATE OR REPLACE FUNCTION fn_registrar_contacto_mensaje (
					p_codigo_postulacion integer,
					p_doc_id character varying(20),
					p_codigo_puesto_laboral integer
					-- in p_tipo_jornada varchar(50),
					-- in p_estado_requerimientos varchar(50)
				)  RETURNS void AS 
 $$
 begin   

		if
		   (
			(select
				count(*)
			from 
				experiencia_requerida er inner join experiencia_laboral el
			on
				(er.experiencia_requerida = el.puesto and er.duracion = el.duracion) where doc_id = p_doc_id) = (select count (*) from experiencia_requerida)
		   
		  ) THEN

				insert into postulacion(codgio_postulacion,doc_id,nombre,estado,fecha_postulacion,codigo_puesto_laboral)
				values(
					p_codigo_postulacion, 
					p_doc_id,
					(
						select 
							nombre 
						from 
							candidato 
						where 
						doc_id = p_doc_id
					),
					'CURRICULO APTO',
					(
					SELECT TO_CHAR(NOW(), 'DD-Mon YYYY')as fecha
					),
					p_codigo_puesto_laboral);
		else
			
			insert into postulacion(codgio_postulacion,doc_id,nombre,estado,fecha_postulacion,codigo_puesto_laboral)
				values(
					p_codigo_postulacion, 
					p_doc_id,
					(
						select 
							nombre 
						from 
							candidato 
						where 
						doc_id = p_doc_id
					),
					'CURRICULO NO APTO',
					(
					SELECT TO_CHAR(NOW(), 'DD-Mon YYYY')as fecha
					),
					p_codigo_puesto_laboral);
		

			end if;
 end;
 $$ language plpgsql;	

select * from fn_FiltroCurriculo(
				    1,
                                    '45977448',
                                    1
                                   
			   );