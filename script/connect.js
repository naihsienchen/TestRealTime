var conn = new WebSocket('ws://localhost:9090');

conn.onopen = function(e) {
    console.log("Connection established!");
};

conn.onmessage = function(e) {
    console.log(e.data);
};

conn.onerror = function(err) {
    console.log(err);
};

function generateRandomNumber() {
    //alert("heya!");
    console.log("generate");
    conn.send("generate random number");
};

function doThat() {
    console.log("doThat");
    //alert("done that!");
    conn.send("do that");
};