const mysql = require('mysql');

var pool = mysql.createPool({
    host: "localhost",
    user: "root",
    password: "",
    database: "bd_final350"
});

pool.connect((error) => {
    if (error) {
      console.error('Error de conexión a MySQL:', error);
    } else {
      console.log('Conexión exitosa a MySQL');
  
      // Aquí puedes realizar consultas y operaciones en la base de datos
  
      // Cierra la conexión cuando hayas terminado
      conexion.end();
    }
  });

  pool.on('error', (error) => {
    console.error('Error en la conexión a MySQL:', error);
  });

exports.pool = pool;