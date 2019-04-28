let express = require('express');
let knex = require('knex');

// Create server via express library
let app = express();

app.get('/api/users', function(request, response) {
  let connection = knex({
    client: 'sqlite3',
    connection: {
      filename: '../database/hagotem.db'
    }
  });
  connection.select().from('users_info').then((users) => {
    response.json(users);
  });
});


app.get('/api/users/:id', function(request, response) {
  let id = request.params.id;
  console.log(id);
  let connection = knex({
    client: 'sqlite3',
    connection: {
      filename: '../database/hagotem.db'
    }
  });
  connection
    .select()
    .from('users_info')
    .where('id', id)
    .first()
    .then((user) => {
      if (user) {
        response.json(user);
      } else {
        response.status(404).json({
          error: `User ${id} not found`
        });
      }
    });
});
app.listen(process.env.PORT || 8000);
