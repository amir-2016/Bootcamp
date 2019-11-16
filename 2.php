function isAcceptedUsername(username) {
    var Regex = /^[A_Z]{7}$/i ;
    return Regex.test(username) ;
}
if (isAcceptedUsername("aaat3st1ng")) {
    alert("Username Is Valid") ;
} else {
    alert("Username Is Invalid") ;
}
function isAcceptedPassword(password) {
    var Regex = /^([0-9]{3}+)*([a-z]{3})$/i ;
    return Regex.test(password) ;
}
if (isAcceptedPassword("123*bro")) {
    alert("Username Is Valid") ;
} else {
    alert("Username Is Invalid") ;
}