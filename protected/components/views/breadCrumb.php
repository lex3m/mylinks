<div id="breadCrumb">
    <?php
    foreach($this->crumbs as $crumb) {
        if(isset($crumb['url'])) {
            if (isset($crumb['option']))
                echo CHtml::link($crumb['name'], $crumb['url'], $crumb['option']);
            else
                echo CHtml::link($crumb['name'], $crumb['url']);
        } else {
            echo $crumb['name'];
        }
        if(next($this->crumbs)) {
            echo $this->delimiter;
        }
    }
    ?>
</div>