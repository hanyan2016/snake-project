<?php if (!defined('THINK_PATH')) exit();?><div class="one_question clearfix">
    <div class="clearfix">
        <div class="pull-left">
            <img style="border-radius:3px;width: 40px" src="<?php echo ($data["user"]["avatar128"]); ?>"/>
        </div>
        <div class="pull-left" style="padding-left: 10px;width: 658px">
            <p class="q_title text-ellipsis" style="font-size: 15px">
                问：<a target="_blank" href="<?php echo U('Question/Index/detail',array('id'=>$data['id']));?>"><?php echo ($data["title"]); ?></a>
            </p>

            <!--<?php if($data['img']): ?><p>
                    <img src="<?php echo ($data['img']); ?>" style="margin-top: 10px;max-width: 100%;max-height: 200px;"/></p><?php endif; ?>-->
            <?php if($data['status'] == 2): ?><div>
                    &nbsp;&nbsp;<span style="color: #D79F39;"><?php echo L("_PENDING_AUDIT_");?></span></div><?php endif; ?>
            <?php if($data['status'] == 0): ?><div> &nbsp;&nbsp;<span style="color: #A6A6A6;"><?php echo L("_AUDIT_FAILURE_");?></span></div><?php endif; ?>
            <div class="q_black_info">
                <?php echo ($data["user"]["space_link"]); echo L("_INITIATE_A_QUESTION_");?>
              <?php echo L("_SHARE_WITH_SPACE_"); echo ($data["answer_num"]); echo L("_PEOPLE_ANSWER_");?>&nbsp;&nbsp;
                <!--支持数：<?php echo ($data["support"]); ?>&nbsp;&nbsp;-->
                <div class="pull-right"><i class="icon-time"></i> <?php echo (friendlydate($data["create_time"])); ?></div>
            </div>
        </div>
    </div>
    <?php if(!empty($data['best_answer_info'])): ?><div class="row best_answer">
            <div style="padding-left: 50px">
                <div style="border-bottom: 1px dashed #ddd"></div>
                <div class="pull-left padding-top-10 text-left">
                    <img style="border-radius:3px;width: 40px" src="<?php echo ($data["best_answer_info"]["user"]["avatar128"]); ?>">
                </div>
                <div style="padding-left: 50px;">
                    <div class="margin-top-10">
                        <p class="text-ellipsis text-muted"><?php echo ($data['best_answer_info']['content']); ?></p>
                    </div>
                    <div class="q_black_info"><?php echo L("_ANSWER_WITH_COLON_");?><a ucard="<?php echo ($data['best_answer_info']['user']['uid']); ?>"
                                                     href="<?php echo ($data['best_answer_info']['user']['space_url']); ?>"
                                                     target="_blank"><?php echo ($data['best_answer_info']['user']['nickname']); ?></a>&nbsp;
                      <?php echo L("_SHARE_WITH_SPACE_"); echo ($data["best_answer_info"]["support"]); echo L("_HUMAN_SUPPORT_");?>

                    </div>
                </div>
            </div>
        </div>
        <?php else: endif; ?>
</div>