{"filter":false,"title":"settings.php","tooltip":"/auth/settings.php","undoManager":{"mark":4,"position":4,"stack":[[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":74,"column":0},"end":{"row":74,"column":12}},"text":"</form><hr/>"},{"action":"removeLines","range":{"start":{"row":63,"column":0},"end":{"row":74,"column":0}},"nl":"\n","lines":["<!-- edit form for user email / this form uses HTML5 attributes, like \"required\" and type=\"email\" -->","<form method=\"post\" action=\"settings\" name=\"user_edit_form_email\" class=\"form-horizontal\" role=\"form\">","    <div style=\"margin-bottom: 25px\" class=\"input-group\">","        <span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>","        <input id=\"user_email\" type=\"email\" name=\"user_email\" class=\"form-control\" value=\"\" placeholder=\"Change email (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_email']; ?>)\" required />","    </div>","    <div style=\"margin-top:15px\" class=\"form-group\">","        <div class=\"col-sm-12 controls\">","            <input type=\"submit\" name=\"user_edit_submit_email\" class=\"btn btn-success\" value=\"<?php echo WORDING_CHANGE_EMAIL; ?>\" />","        </div>","    </div>"]}]}],[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":63,"column":0},"end":{"row":63,"column":101}},"text":"<!-- edit form for user email / this form uses HTML5 attributes, like \"required\" and type=\"email\" -->"},{"action":"insertText","range":{"start":{"row":63,"column":101},"end":{"row":64,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":64,"column":0},"end":{"row":74,"column":0}},"lines":["<form method=\"post\" action=\"settings\" name=\"user_edit_form_email\" class=\"form-horizontal\" role=\"form\">","    <div style=\"margin-bottom: 25px\" class=\"input-group\">","        <span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>","        <input id=\"user_email\" type=\"email\" name=\"user_email\" class=\"form-control\" value=\"\" placeholder=\"Change email (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_email']; ?>)\" required />","    </div>","    <div style=\"margin-top:15px\" class=\"form-group\">","        <div class=\"col-sm-12 controls\">","            <input type=\"submit\" name=\"user_edit_submit_email\" class=\"btn btn-success\" value=\"<?php echo WORDING_CHANGE_EMAIL; ?>\" />","        </div>","    </div>"]},{"action":"insertText","range":{"start":{"row":74,"column":0},"end":{"row":74,"column":12}},"text":"</form><hr/>"}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":74,"column":0},"end":{"row":74,"column":12}},"text":"</form><hr/>"},{"action":"removeLines","range":{"start":{"row":63,"column":0},"end":{"row":74,"column":0}},"nl":"\n","lines":["<!-- edit form for user email / this form uses HTML5 attributes, like \"required\" and type=\"email\" -->","<form method=\"post\" action=\"settings\" name=\"user_edit_form_email\" class=\"form-horizontal\" role=\"form\">","    <div style=\"margin-bottom: 25px\" class=\"input-group\">","        <span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>","        <input id=\"user_email\" type=\"email\" name=\"user_email\" class=\"form-control\" value=\"\" placeholder=\"Change email (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_email']; ?>)\" required />","    </div>","    <div style=\"margin-top:15px\" class=\"form-group\">","        <div class=\"col-sm-12 controls\">","            <input type=\"submit\" name=\"user_edit_submit_email\" class=\"btn btn-success\" value=\"<?php echo WORDING_CHANGE_EMAIL; ?>\" />","        </div>","    </div>"]}]}],[{"group":"doc","deltas":[{"action":"removeLines","range":{"start":{"row":62,"column":0},"end":{"row":63,"column":0}},"nl":"\n","lines":[""]}]}],[{"group":"doc","deltas":[{"action":"removeText","range":{"start":{"row":61,"column":12},"end":{"row":62,"column":0}},"text":"\n"}]}]]},"ace":{"folds":[],"scrolltop":720,"scrollleft":0,"selection":{"start":{"row":61,"column":12},"end":{"row":61,"column":12},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":41,"state":"start","mode":"ace/mode/php"}},"timestamp":1409266834537,"hash":"f3a8cfd669dadf388397844ad9dd33eb2b12ae19"}