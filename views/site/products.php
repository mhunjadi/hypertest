<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-products">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="body-content">

        <div class="row">
		<?php foreach($products as $product): ?>
            <div class="col-lg-12">
                <h2><?= Html::encode($product['productName']) ?></h2>
				<b>Code: <?= Html::encode($product['productCode']) ?></b><br />
				<b>Qty ordered: <?= Html::encode($product['qty']) ?></b>
				<p>&nbsp;</p>

                <p><?= Html::encode($product['productDescription']) ?></p>                
            </div>		
		<?php endforeach; ?>
        </div>

    </div>
</div>
