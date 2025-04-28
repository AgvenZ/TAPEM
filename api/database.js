const sqlite3 = require('sqlite3').verbose();
const path = require('path');

// Initialize database connection
function initializeDatabase() {
  // Adjust database path for Vercel environment
  let dbPath;
  if (process.env.VERCEL) {
    // In Vercel, use an in-memory database
    dbPath = ':memory:';
    console.log('Running in Vercel environment, using in-memory database');
  } else {
    // In local environment, use the SQLite file
    dbPath = path.resolve(__dirname, '../database/database.sqlite');
  }

  const db = new sqlite3.Database(dbPath, (err) => {
    if (err) {
      console.error('Error connecting to database:', err.message);
    } else {
      console.log('Connected to the SQLite database');

      // If using in-memory database, initialize with schema and sample data
      if (process.env.VERCEL) {
        initializeInMemoryDatabase(db);
      }
    }
  });

  return db;
}

// Initialize in-memory database with schema and sample data for Vercel environment
function initializeInMemoryDatabase(db) {
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