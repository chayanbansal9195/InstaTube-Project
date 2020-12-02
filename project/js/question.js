function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
}

function validateForm() {
  // Retrieving the values of form elements
  var qname = document.question.qname.value;
  var qtext = document.question.qtext.value;

  var qnameErr = (qtextErr = true);

  if (qname == "") {
    printError("qnameErr", "Please enter your Question name");
  } else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(qname) === false) {
      printError("qnameErr", "Please enter a valid Question name");
    } else {
      printError("qnameErr", "");
      qnameErr = false;
    }
  }

  if (qtext == "") {
    printError("qtextErr", "Please enter your Question Text");
  } else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(qtext) === false) {
      printError("qtextErr", "Please enter a valid Question Text");
    } else {
      printError("qtextErr", "");
      qtextErr = false;
    }
  }

  if ((qnameErr || qtextErr) == true) {
    return false;
  }
}
