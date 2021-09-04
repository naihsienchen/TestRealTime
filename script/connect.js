var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
};

/* function generateRandomNumber() {
    //alert("heya!");
    conn.send("generate random number");
}; */

function doThat() {
    //alert("done that!");
    conn.send("do that");
};