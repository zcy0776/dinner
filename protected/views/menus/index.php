<div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>菜单信息</h3>
        <ul class="content-box-tabs">
          <li><a href="#tab1" class="default-tab">列表</a></li>
          <a href="<?php echo Yii::app()->createUrl('menus/form');?>" class="button" style="float:left;margin-left:10px;">新增</a>
        </ul>
        <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
          <table>
            <thead>
              <tr>
                <th>
                  <input class="check-all" type="checkbox" />
                </th>
                <th>图片</th>
                <th>菜名</th>
                <th>所属商家</th>
                <th>状态</th>
                <th>价格</th>
                <th>创建时间</th>
                <th>操作</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
              	<td>
                	<a href="<?php echo Yii::app()->createUrl('menus/form');?>" class="button" style="float:left;margin-left:10px;">新增</a>
                </td>
                <td colspan="7">
                 <?php $this->widget('application.widgets.MyLinkPager', array(
                 			'pages' 			=> $pages,
                 			'firstPageLabel' 	=> '首页',
                 			'lastPageLabel' 	=> '末页',
                 			'prevPageLabel' 	=> '前一页',
                 			'nextPageLabel' 	=> '下一页',
                 			'firstPageLabel' 	=> '首页',
                 			'maxButtonCount' 	=> '5',
                 			'header'			=> '',
                 		));
                 ?>
                  <!-- End .pagination -->
                  <div class="clear"></div>
                </td>
              </tr>
            </tfoot>
            <tbody>
               <?php if(isset($data)):?>
               		<?php foreach ($data AS $k => $v):?>
		              <tr>
		                <td>
		                  <input type="checkbox" name="infolist[]" value="<?php echo $v['id'];?>" />
		                </td>
		                <td><img src="<?php echo $v['index_pic'];?>" width="40" height="30"></td>
		                <td><?php echo $v['name'];?></td>
		                <td><?php echo $v['shop_name'];?></td>
		                <td  _url="<?php echo Yii::app()->createUrl('menus/audit',array('id' => $v['id'])); ?>"  class="status_row" style="cursor:pointer;color:<?php echo $v['status_color'];?>"><?php echo $v['status_text'];?></td>
		                <td><?php echo $v['price'];?></td>
		                <td><?php echo $v['create_time'];?></td>
		                <td>
		                  <a href="<?php echo Yii::app()->createUrl('menus/form',array('id' => $v['id']));?>" title="Edit"><img src="<?php echo Yii::app()->baseUrl;?>/assets/images/icons/pencil.png" alt="Edit" /></a> 
		                  <a href="javascript:void(0);" _href="<?php echo Yii::app()->createUrl('menus/delete',array('id' => $v['id']));?>"  class="remove_row"><img src="<?php echo Yii::app()->baseUrl;?>/assets/images/icons/cross.png" alt="Delete" /></a>
		                </td>
		              </tr>
              		<?php endforeach;?>
              <?php endif;?>
            </tbody>
          </table>
        </div>
      </div>
      <input type="hidden" id="audit_url" value="<?php echo Yii::app()->createUrl('menus/audit'); ?>" />
      <!-- End .content-box-content -->
</div>