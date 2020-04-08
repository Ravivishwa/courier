  <?php

 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once('database.php');
require_once('library.php');
$company=mysql_fetch_array(mysql_query("SELECT * FROM company"));

isUser();
?>              
				<!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <?php echo $company['footer_website']; ?>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->