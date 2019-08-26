<?php

/* Controllers */
require_once "controllers/template.controller.php";
require_once "controllers/administrators.controller.php";
require_once "controllers/dropshipping.controller.php";
require_once "controllers/variants.controller.php";
/* ===================================================== */
/* Models */
require_once "models/administrators.model.php";
require_once "models/dropshipping.model.php";
require_once "models/variants.model.php";
/* ===================================================== */

$template = new TemplateController();
$template -> template();