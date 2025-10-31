var hmContextIds = new Array();
function hmGetContextId(query) {
    var urlParams;
    var match,
        pl = /\+/g,
        search = /([^&=]+)=?([^&]*)/g,
        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
    params = {};
    while (match = search.exec(query))
       params[decode(match[1])] = decode(match[2]);
    if (params["contextid"]) return decodeURIComponent(hmContextIds[params["contextid"]]);
    else return "";
}

hmContextIds["11642"]="rancelab-qst.html";
hmContextIds["11597"]="rancelab-the-screen.html";
hmContextIds["12034"]="rancelab_discount-report.html";
hmContextIds["11989"]="rancelab_discount-report.html";
hmContextIds["12033"]="rancelab-discount-coupon-crm.html";
hmContextIds["11986"]="rancelab-feedback-master.html";
hmContextIds["11633"]="aboutrancelab.html";
