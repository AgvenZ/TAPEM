const mysql = require('mysql2');
const path = require('path');

// Initialize database connection
function initializeDatabase() {
  // Determine environment and set connection parameters
  let connection;

  if (process.env.VERCEL) {
    // In Vercel, use environment variables for MySQL connection
    console.log('Running in Vercel environment, using MySQL database');

    connection = mysql.createConnection({
      host: process.env.MYSQL_HOST,
      port: process.env.MYSQL_PORT || 3306,
      user: process.env.MYSQL_USER,
      password: process.env.MYSQL_PASSWORD,
      database: process.env.MYSQL_DATABASE,
      ssl: process.env.MYSQL_SSL === 'true' ? true : undefined
    });
  } else {
    // In local environment, use local MySQL server
    console.log('Running in local environment, using local MySQL database');

    connection = mysql.createConnection({
      host: process.env.MYSQL_HOST || 'localhost',
      port: process.env.MYSQL_PORT || 3306,
      user: process.env.MYSQL_USER || 'root',
      password: process.env.MYSQL_PASSWORD || '',
      database: process.env.MYSQL_DATABASE || 'tapem'
    });
  }

  // Connect to the database
  connection.connect((err) => {
    if (err) {
      console.error('Error connecting to MySQL database:', err.message);
      return;
    }
    console.log('Connected to the MySQL database');

    // If in Vercel environment, initialize database schema
    if (process.env.VERCEL && process.env.MYSQL_INIT_DB === 'true') {
      initializeDatabaseSchema(connection);
    }
  });

  // Add promise-based query method for easier async/await usage
  connection.queryPromise = (sql, params) => {
    return new Promise((resolve, reject) => {
      connection.query(sql, params, (err, results) => {
        if (err) return reject(err);
        resolve(results);
      });
    });
  };

  return connection;
}

// Initialize database schema for Vercel environment
function initializeDatabaseSchema(connection) {
  console.log('Initializing MySQL database schema');

  // Create users table
  connection.query(`CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )`, (err) => {
    if (err) {
      console.error('Error creating users table:', err.message);
    } else {
      console.log('Users table created or already exists');

      // Insert sample user if table is empty
      connection.query('SELECT COUNT(*) as count FROM users', (err, results) => {
        if (err) {
          console.error('Error checking users table:', err.message);
        } else if (results[0].count === 0) {
          connection.query(`INSERT INTO users (name, email) VALUES ('admin', 'admin@tapem.com')`, (err) => {
            if (err) {
              console.error('Error inserting sample user:', err.message);
            } else {
              console.log('Sample user inserted');
            }
          });
        }
      });
    }
  });

  // Create pages table
  connection.query(`CREATE TABLE IF NOT EXISTS pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    content TEXT,
    is_published TINYINT(1) DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )`, (err) => {
    if (err) {
      console.error('Error creating pages table:', err.message);
    } else {
      console.log('Pages table created or already exists');

      // Insert sample page if table is empty
      connection.query('SELECT COUNT(*) as count FROM pages', (err, results) => {
        if (err) {
          console.error('Error checking pages table:', err.message);
        } else if (results[0].count === 0) {
          connection.query(`INSERT INTO pages (title, slug, content) VALUES ('Home', 'home', 'Welcome to TAPEM')`, (err) => {
            if (err) {
              console.error('Error inserting sample page:', err.message);
            } else {
              console.log('Sample page inserted');
            }
          });
        }
      });
    }
  });

  // Create news table
  connection.query(`CREATE TABLE IF NOT EXISTS news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    content TEXT,
    image_path VARCHAR(255),
    is_published TINYINT(1) DEFAULT 1,
    published_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )`, (err) => {
    if (err) {
      console.error('Error creating news table:', err.message);
    } else {
      console.log('News table created or already exists');

      // Insert sample news if table is empty
      connection.query('SELECT COUNT(*) as count FROM news', (err, results) => {
        if (err) {
          console.error('Error checking news table:', err.message);
        } else if (results[0].count === 0) {
          connection.query(`INSERT INTO news (title, slug, content, image_path) VALUES ('Sample News', 'sample-news', 'This is a sample news article', '/img/sample.jpg')`, (err) => {
            if (err) {
              console.error('Error inserting sample news:', err.message);
            } else {
              console.log('Sample news inserted');
            }
          });
        }
      });
    }
  });

  console.log('MySQL database schema initialization completed');
}

module.exports = { initializeDatabase };