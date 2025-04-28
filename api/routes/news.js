const express = require('express');
const router = express.Router();
const { db } = require('../server'); // Keep this import as server.js still exports db

// Get all news
router.get('/', (req, res) => {
  const sql = 'SELECT id, title, slug, content, image_path, is_published, published_at, created_at, updated_at FROM news ORDER BY published_at DESC';

  db.query(sql, [], (err, rows) => {
    if (err) {
      return res.status(500).json({ error: err.message });
    }
    res.json({
      message: 'News retrieved successfully',
      data: rows
    });
  });
});

// Get news by slug
router.get('/:slug', (req, res) => {
  const sql = 'SELECT id, title, slug, content, image_path, is_published, published_at, created_at, updated_at FROM news WHERE slug = ?';

  db.query(sql, [req.params.slug], (err, results) => {
    if (err) {
      return res.status(500).json({ error: err.message });
    }
    if (!results || results.length === 0) {
      return res.status(404).json({ error: 'News not found' });
    }
    res.json({
      message: 'News retrieved successfully',
      data: results[0]
    });
  });
});

module.exports = router;