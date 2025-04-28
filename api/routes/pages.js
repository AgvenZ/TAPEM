const express = require('express');
const router = express.Router();
const { db } = require('../server');

// Get all pages
router.get('/', (req, res) => {
  const sql = 'SELECT id, title, slug, content, is_published, created_at, updated_at FROM pages';

  db.all(sql, [], (err, rows) => {
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

  db.get(sql, [req.params.slug], (err, row) => {
    if (err) {
      return res.status(500).json({ error: err.message });
    }
    if (!row) {
      return res.status(404).json({ error: 'Page not found' });
    }
    res.json({
      message: 'Page retrieved successfully',
      data: row
    });
  });
});

module.exports = router;