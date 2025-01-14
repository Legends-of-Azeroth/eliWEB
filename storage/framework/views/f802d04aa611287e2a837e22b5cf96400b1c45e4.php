<?php $__env->startSection('content'); ?>
<?php $__env->startSection('bodyclass'); ?>
<body>
<?php $__env->stopSection(); ?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-12">
        <h2>Редактирование категории товаров</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('personal')); ?>">Главная</a>
            </li>
            <li>
                Система
            </li>
            <li>
                Категории товаров
            </li>
            <li class="active">
                <strong>Редактирование категории товаров</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Форма редактирования категории товаров</h5>
				</div>
                <div class="ibox-content">

                    <form action="<?php echo e(route('admin.shopcategories.update')); ?>" method="POST" role="form">
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" class="form-control" name="shopcategoryid" value="<?php echo e($shopcategory->id); ?>">

                        <div class="form-group">
                            <label for="display_name">Отображаемое имя</label>
                            <input type="text" class="form-control" name="display_name" id=""
                                   value="<?php echo e($shopcategory->local); ?>" placeholder="Отображаемое имя...">
                        </div>

                        <div class="form-group">
                            <label for="name">Переменная</label>
                            <input type="text" class="form-control" name="name" id="" placeholder="Переменная..."
                                   value="<?php echo e($shopcategory->name); ?>">
                        </div>


                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </form>


                </div>

            </div>

        </div>
    </div>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>