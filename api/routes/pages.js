const express = require('express');
const router = express.Router();
const { db } = require('../server'); // Keep this import as server.js still exports db

// Get all pages
router.get('/', (req, res) => {
  const sql = 'SELECT id, title, slug, content, is_published, created_at, updated_at FROM pages';

  db.query(sql, [], (err, rows) => {
    if (err) {
      return res.status(500).json({ error: err.message });
    }
    res.json({
      message: 'Pages retrieved successfully',
      data: rows
    });
  });
});

// Get page by slug
router.get('/:slug', (req, res) => {
  const sql = 'SELECT id, title, slug, content, is_published, created_at, updated_at FROM pages WHERE slug = ?';

  db.query(sql, [req.params.slug], (err, results) => {
    if (err) {
      return res.status(500).json({ error: err.message });
    }
    if (!results || results.length === 0) {
      return res.status(404).json({ error: 'Page not found' });
    }
    res.json({
      message: 'Page retrieved successfully',
      data: results[0]
    });
  });
});

module.exports = router;