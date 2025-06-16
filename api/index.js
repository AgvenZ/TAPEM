// This file serves as the entry point for Vercel deployment
const app = require('./server');

// Export the Express app as a serverless function
module.exports = app;