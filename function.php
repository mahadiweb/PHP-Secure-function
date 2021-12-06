1=>strip_tags(); //strip_tags() function strips/remove a string from HTML, XML, and PHP tags.

2=>mysqli_real_escape_string(); //function escapes special characters in a string for use in an SQL query, taking into account the current character set of the connection.

3=>htmlspecialchars(); //htmlspecialchars() function print value with html tag, not execute html tag.

4=>trim();  //trim() function removes whitespace and other predefined characters from both sides of a string.

5=>define(); //define() function a useful function to use user can't direct access your file.

6=>filter_var($id, FILTER_SANITIZE_NUMBER_INT); //Sanitize special characters from integer.

7=>md5(); //generate hash.

8=>sha1(); //generate hash.

9=>password_hash(); //generate hash.

10=>error_reporting(); //hide error from user.

11=>ini_set('max_execution_time', 0); //max execution time set.

12=>ini_set('memory_limit','1024'); //set max memory limit

13=>is_numeric(); //filter only number.

14=>get_defined_vars(); //get all defined var.

15=>is_string(); //get only string.

16=>die(); //hide all data;

17=>fsockopen("www.example.com", 80); //check internet connection or chect custom website active or not;

18=>http_response_code(403); //Get website header response code;
