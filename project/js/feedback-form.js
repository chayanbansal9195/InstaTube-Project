function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
}

function validateForm() {
  // Retrieving the values of form elements
  var fname = document.feed.fname.value;
  var lname = document.feed.lname.value;
  var sugg = document.feed.sugg.value;

  var fnameErr = (lnameErr = suggErr = true);

  if (fname == "") {
    printError("fnameErr", "Please enter your first name");
  } else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(fname) === false) {
      printError("fnameErr", "Please enter a valid first name");
    } else {
      printError("fnameErr", "");
      fnameErr = false;
    }
  }

  if (lname == "") {
    printError("lnameErr", "Please enter your last name");
  } else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(lname) === false) {
      printError("lnameErr", "Please enter a valid last name");
    } else {
      printError("lnameErr", "");
      lnameErr = false;
    }
  }

  if (sugg == "") {
    printError("suggErr", "Please enter text");
  } else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(sugg) === false) {
      printError("suggErr", "Please enter a valid text");
    } else {
      printError("suggErr", "");
      suggErr = false;
    }
  }
  if ((fnameErr || lnameErr || suggErr )== true) {
    return false;
  }
}
