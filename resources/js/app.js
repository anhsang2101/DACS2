import './bootstrap';
var search1 = document.getElementById('search1');
        var search1 = document.getElementById('search2');
        var search1 = document.getElementById('search3');
        var search1 = document.getElementById('search4');
        var search1 = document.getElementById('search5');
        var major = document.getElementById('major');
        var area = document.getElementById('area');
        var rank = document.getElementById('rank');
        var type = document.getElementById('type');
        var wage = document.getElementById('wage');
        var stt = console.log(document.getElementById('search1').checked)
        if (stt) {
            major.style.display = 'block';
        } else {
            major.style.display = 'none';
        }