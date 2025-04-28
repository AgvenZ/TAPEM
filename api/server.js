const express = require('express');
const cors = require('cors');
const path = require('path');
const { initializeDatabase } = require('./database');

// Initialize express app
const app = express();
const PORT = process.env.PORT || 3000;

// Middleware
app.use(cors());
app.use(express.json());

// Initialize database
const db = initializeDatabase();

// Export db for use in route files
exports.db = db;

// Import routes
const usersRoutes = require('./routes/users');
const pagesRoutes = require('./routes/pages');
const newsRoutes = require('./routes/news');

// Use routes
app.use('/api/users', usersRoutes);
app.use('/users', usersRoutes); // Add direct access to /users endpoint
app.use('/api/pages', pagesRoutes);
app.use('/api/news', newsRoutes);

// Root route
app.get('/', (req, res) => {
  res.json({
    message: 'Welcome to TAPEM API',
    endpoints: [
      '/api/users',
      '/api/pages',
      '/api/news'
    ]
  });
});

// Start server
app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});

// Handle process termination
process.on('SIGINT', () => {
  db.close((err) => {
    if (err) {
      console.error('Error closing database connection:', err.message);
    } else {
      console.log('Database connection closed');
    }
    process.exit(0);
  });
});