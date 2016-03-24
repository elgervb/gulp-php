<?php 

if (mail('info@elgervanboxtel.nl', 'Subject', 'This is the mail body\r\n Tnx!')) {
	echo 'Mail send';
} else {
	echo 'Mail not send';
}



phpinfo();
