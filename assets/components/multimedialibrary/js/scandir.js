/**
 * scandir.js
 */

var scandircount = 0;
function loadScanDirProcess() {
    scandircount++;
    FilesInDir--;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var res=0, textnode, node = document.createElement("a");
            node.href="#c"+scandircount;
            //add responText to a node
            
            res = parseInt(xhttp.responseText);
            if (!isNaN(res) && res > 0) {
                textnode = document.createTextNode(xhttp.responseText); 
            } else {
                textnode = document.createTextNode("Scan completed"); 
                node.className = "scan-completed";
            }
            node.appendChild(textnode);
            document.getElementById("scandir").appendChild(node);
            node.focus();
            
            if (res > 0 && FilesInDir >=0) loadScanDirProcess();
        }
  };
  
  var t = new Date().getTime();
  
  xhttp.open("GET", processURL+"&index="+scandircount+"&t="+t, true);
  xhttp.send();
};
