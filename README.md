# SQLi-Patcher

1.  Upload simple_patch.php at public_html (must be at same index.php folder)
2.  Go to your vulnerable page example "result-display.php?subcatid=314" Whereas, result-display contains vulnerable code.
3.  Edit result-display code and add this 
        " include 'simple_patch.php'; "
        
4.  Update your .htaccess with the provided one in this git.
        
 
