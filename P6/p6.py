import psycopg2 as pc

conexion = pc.connect(user="postgres",
                      password="7078",
                      host="127.0.0.1",
                      port="5433",
                      database="mibasewillson")
bd = conexion.cursor()
sql ="select  round(avg(case when departamento like '01' then notaFinal end), 2) as CH,round(avg(case when departamento like '02' then notaFinal end), 2) as LP,round(avg(case when departamento like '03' then notaFinal end), 2) as CB,round(avg(case when departamento like '04' then notaFinal end), 2) as ORU,round(avg(case when departamento like '05' then notaFinal end), 2) as PT,round(avg(case when departamento like '06' then notaFinal end), 2) as TJ,round(avg(case when departamento like '07' then notaFinal end), 2) as SC,round(avg(case when departamento like '08' then notaFinal end), 2) as BE,round(avg(case when departamento like '09' then notaFinal end), 2) as PD from (select p.departamento,i.notaFinal from persona p, inscripcion i where p.ci = i.ciest)temp1;"
bd.execute(sql)
conexion.commit()
for registros in bd:
    print(registros)
conexion.close()
