const express = require('express');
const router = express.Router();
const { db } = require('../server'); // Keep this import as server.js still exports db

// Get all users
router.get('/', (req, res) => {
  const sql = 'SELECT id, name, email, created_at, updated_at FROM users';

  db.query(sql, [], (err, rows) => {
    if (err) {
      return res.status(500).json({ error: err.message });
    }
    res.json({
      message: 'Users retrieved successfully',
      data: rows
    });
  });
});

// Get user by ID
router.get('/:id', (req, res) => {
  const sql = 'SELECT id, name, email, created_at, updated_at FROM users WHERE id = ?';

  db.query(sql, [req.params.id], (err, results) => {
    if (err) {
      return res.status(500).json({ error: err.message });
    }
    if (!results || results.length === 0) {
      return res.status(404).json({ error: 'User not found' });
    }
    res.json({
      message: 'User retrieved successfully',
      data: results[0]
    });
  });
});

module.exports = router;