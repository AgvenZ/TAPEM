const express = require('express');
const router = express.Router();
const { db } = require('../server'); // Keep this import as server.js still exports db

// Get all users
router.get('/', (req, res) => {
  const sql = 'SELECT id, name, email, created_at, updated_at FROM users';

  db.all(sql, [], (err, rows) => {
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

  db.get(sql, [req.params.id], (err, row) => {
    if (err) {
      return res.status(500).json({ error: err.message });
    }
    if (!row) {
      return res.status(404).json({ error: 'User not found' });
    }
    res.json({
      message: 'User retrieved successfully',
      data: row
    });
  });
});

module.exports = router;