<?php
use LouisLam\CRUD\LouisCRUD;
use LouisLam\CRUD\Field;
use LouisLam\Util;

/** @var Field[] $fields */
/** @var array $list */
/** @var LouisCRUD $crud */
?>

<script src="<?=Util::res("vendor/components/jquery/jquery.min.js") ?>"></script>
<script src="<?=Util::res("vendor/datatables/datatables/media/js/jquery.dataTables.min.js") ?>"></script>
<script src="<?=Util::res("vendor/louislam/louislam-crud-library/js/LouisCRUD.js") ?>"></script>
<script>
    var crud = new LouisCRUD();
</script>