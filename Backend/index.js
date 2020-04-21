const express = require('express');
const app = express();
let mysql = require('mysql');
let name = "";

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  database: "exercises"
});

con.connect(function(err) {
    if (err) throw err;
    con.query("SELECT * FROM exam", function (err, result, fields) {
      if (err) throw err;
      console.log(result[0].first_name);
      name = result[0].first_name;
    });
  });

app.get('/', (req, res) => {
    res.send(`<h1>Hello World! ${name}</h1>`);
});

const port = process.env.port || 5000;

app.listen(port, () => console.log(`Server started on port ${port}`));