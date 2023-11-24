import csv
import mysql.connector

# Configuración de la conexión a la base de datos
db_config = {
    'host': 'localhost',
    'user': 'root',
    'password': '',
    'database': 'horarios'
}

# Conexión a la base de datos
conn = mysql.connector.connect(**db_config)
cursor = conn.cursor()

# Ruta del archivo CSV
csv_file_path = 'import.csv'

# Lectura del archivo CSV y carga de datos a la base de datos
try:
    with open(csv_file_path, 'r') as csv_file:
        csv_reader = csv.DictReader(csv_file)
        
        # Itera sobre cada fila del CSV
        for row in csv_reader:
            # Obtiene los valores de cada columna
            nombre = row['nombre']
            clave = row['clave']
            plan = row['plan']
            horas = row['horas']
            horas_aula = row['horas_aula']
            horas_plan = row['horas_pla']

            # Inserta los datos en la base de datos
            query = "INSERT INTO horarios (nombre, clave, plan, horas, horas_aula, horas_plan) VALUES (%s, %s, %s, %s, %s, %s)"
            values = (nombre, clave, plan, horas, horas_aula, horas_plan)
            cursor.execute(query, values)

        # Realiza la confirmación de la transacción
        conn.commit()
        print("Datos importados exitosamente.")

except Exception as e:
    # Si hay un error, realiza un rollback
    conn.rollback()
    print(f"Error: {e}")

finally:
    # Cierra la conexión
    cursor.close()
    conn.close()
