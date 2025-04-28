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
  console.log('Initializing in-memory database with schema and sample data');

  // Create users table
  db.serialize(() => {
    // Create users table
    db.run(`CREATE TABLE IF NOT EXISTS users (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      name TEXT NOT NULL,
      email TEXT UNIQUE NOT NULL,
      created_at TEXT DEFAULT CURRENT_TIMESTAMP,
      updated_at TEXT DEFAULT CURRENT_TIMESTAMP
    )`);

    // Create pages table
    db.run(`CREATE TABLE IF NOT EXISTS pages (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      title TEXT NOT NULL,
      slug TEXT UNIQUE NOT NULL,
      content TEXT,
      is_published INTEGER DEFAULT 1,
      created_at TEXT DEFAULT CURRENT_TIMESTAMP,
      updated_at TEXT DEFAULT CURRENT_TIMESTAMP
    )`);

    // Create news table
    db.run(`CREATE TABLE IF NOT EXISTS news (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      title TEXT NOT NULL,
      slug TEXT UNIQUE NOT NULL,
      content TEXT,
      image_path TEXT,
      is_published INTEGER DEFAULT 1,
      published_at TEXT DEFAULT CURRENT_TIMESTAMP,
      created_at TEXT DEFAULT CURRENT_TIMESTAMP,
      updated_at TEXT DEFAULT CURRENT_TIMESTAMP
    )`);

    // Insert sample data
    db.run(`INSERT INTO users (name, email) VALUES ('admin', 'admin@tapem.com')`);
    db.run(`INSERT INTO pages (title, slug, content) VALUES ('Home', 'home', 'Welcome to TAPEM')`);
    db.run(`INSERT INTO news (title, slug, content, image_path) VALUES ('Sample News', 'sample-news', 'This is a sample news article', '/img/sample.jpg')`);

    console.log('In-memory database initialized with schema and sample data');
  });
}

module.exports = { initializeDatabase };