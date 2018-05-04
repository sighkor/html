<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/marketplace/skins/default/default.css--><?php $__tmp=array('modules/marketplace/skins/default/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/marketplace/skins/default/plugin/xe-icon/xeicon.css--><?php $__tmp=array('modules/marketplace/skins/default/plugin/xe-icon/xeicon.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="mp-box mp-popup-box">
<?php Context::addJsFile("modules/marketplace/ruleset/insertAdvertise.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./"  method="post" class="mp-form-insert"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertAdvertise" />
<input type="hidden" name="act" value="procMarketplaceInsertAdvertise" />
<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
	<div class="mp-content">
		<div class="content_header">
			<div class="mp-title-insert-advertise mp-hidetext">프리미엄 광고 등록</div>
			<a href="javascript:window.close();" class="mp-button button-white button-small button-return"><i class="xe-close"></i> 창 닫기</a>
		</div>
		<div class="mp-notice">
			<i class="xe-announce"> 판매중인 상품의 상품 정보를 수정하실 수 있습니다.</i>
			
			<div>
				<ul class="notice_list">
				<li>1. 광고료 혹은 소유 포인트가 모두 소진되면 <strong>광고가 중단</strong>됩니다.</li>
				<li>2. 입찰가가 순위에 밀려 사이트 광고 노출 기준 입찰가보다 낮아지면 광고가 중단됩니다. 너무 낮은 입찰가격은 쉽게 광고 순위에서 밀려날 수 있습니다.</li>
				</ul>
			</div>
		</div>
		<div class="mp-block" style="padding: 0 10px;">			
			<div class="mp-block">
				<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>" style="margin-top:0;margin-bottom:25px;">
					<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
				</div><?php } ?>
				<div class="mp-bid-list">
				<h3><i class="xe-canvas"></i> 프리미엄 광고 입찰 목록</h3>
				<ul>
					<?php if($__Context->advertise_list&&count($__Context->advertise_list))foreach($__Context->advertise_list as $__Context->key=>$__Context->val){ ?>
					<li<?php if($__Context->val->bid_price == $__Context->advertise_info->bid_price){ ?> class="active"<?php } ?>><span><?php echo $__Context->key+1 ?>.</span> 프리미엄 광고 <?php echo $__Context->key+1 ?>위 입찰가 : <?php echo $__Context->val->bid_price ?> 포인트</li>
					<?php } ?>
				</ul>
				</div>
				<style type="text/css">
					.mp-box .mp-bid-list {
						float:left;
						width: 43%;
						margin-top: 5px;
						margin-bottom: 40px;
					}
					.mp-box .mp-bid-list h3 {
						padding-bottom: 10px;
						border-bottom: 1px solid #c2c2c2;
					}
					.mp-box .mp-bid-list li {
						padding: 9px 10px 11px 5px;
						font-size: 13px;
						border-bottom: 1px solid #f0f0f0;
					}
					.mp-box .mp-bid-list li.active {
						background-color:#FFFFD2;
					}
					.mp-box .mp-bid-list li span {
						font-size: 17px;
						font-weight: bold;
					}
				</style>
				<div class="mp-block" style="width: 42%; float:right; clear:none;">
					<section class="mp-section">
					  <label for="bid_price" class="mp-label">입찰가</label>
					  <input id="bid_price" type="text" value="<?php echo $__Context->advertise_info->bid_price ?>" name="bid_price" class="mp-input number"> 포인트
					  <?php if($__Context->module_info->minimum_bid_price){ ?><p class="description">최소 입찰 금액은 <strong><?php echo $__Context->module_info->minimum_bid_price ?></strong> 포인트 입니다.</p><?php } ?>
					</section>
					<section class="mp-section">
					  <label for="balance" class="mp-label">최대 광고료 제한</label>
					  <input id="balance" type="text" value="<?php echo $__Context->advertise_info->balance ?>" name="balance" class="mp-input number"> 포인트
					  <p class="description">최대 광고료에 도달하면 광고는 자동으로 중단됩니다.</p>
					</section>
				</div>
				<div class="btnArea">
					<input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="btn" />
				</div>	
			</div>
		</div>
	</div>
</form>
</div>