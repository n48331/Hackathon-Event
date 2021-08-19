var mysql = require('mysql');

var con = mysql.createConnection({
  host: "sql202.epizy.com",
  user: "epiz_28046783",
  password: "ptOibJxMfudLJkT"
});

con.connect(function(err) {
  if (err) 
  throw ("not Connected");
  else
  console.log("Connected!");
});