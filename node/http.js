const http = require('http')
http.createServer(function(request, response){
    response.write('no joda jaja')
    response.end()

}).listen(3000)

console.log('puerto abierto')