<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'grades', language 'zh_cn', branch 'MOODLE_22_STABLE'
 *
 * @package   grades
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = '活动';
$string['addcategory'] = '添加类别';
$string['addcategoryerror'] = '不能添加类别';
$string['addexceptionerror'] = '添加例外时出错（用户id:成绩项）';
$string['addfeedback'] = '添加反馈';
$string['addgradeletter'] = '添加一个分数段';
$string['addidnumbers'] = '添加ID号';
$string['additem'] = '添加成绩项';
$string['addoutcome'] = '添加一个能力';
$string['addoutcomeitem'] = '添加能力项';
$string['addscale'] = '添加一个等级';
$string['aggregateextracreditmean'] = '平均分（包括额外加分）';
$string['aggregatemax'] = '最高分';
$string['aggregatemean'] = '平均分';
$string['aggregatemedian'] = '中位数';
$string['aggregatemin'] = '最低分';
$string['aggregatemode'] = '众数';
$string['aggregateonlygraded'] = '仅汇总非空的成绩';
$string['aggregateonlygraded_help'] = '空成绩是指在成绩单中没有的成绩。一份还未评分的作业，或一个还未参加的测验等都会导致空成绩的出现。
此设置决定空成绩是不包含在汇总中，还是以最低分（例如评分范围为0-100的作业的最低分是0）计算。';
$string['aggregateoutcomes'] = '在成绩汇总中包括能力';
$string['aggregateoutcomes_help'] = '如果打开此项，能力将被包含在成绩汇总中。这可能导致非期望的类别总分。';
$string['aggregatesonly'] = '仅显示汇总';
$string['aggregatesubcats'] = '成绩汇总是否包含子类别';
$string['aggregatesubcats_help'] = '此设置决定子类别中的成绩是否包含在汇总中';
$string['aggregatesum'] = '总分';
$string['aggregateweightedmean'] = '加权平均分';
$string['aggregateweightedmean2'] = '简单加权平均分';
$string['aggregation'] = '成绩汇总算法';
$string['aggregation_help'] = '汇总算法决定了一个类别中的成绩如何合并计算。例如：
* 平均分 - 所有分数的总和除以分数个数
* 中位数 - 把所有分数按大小排序后，处于中间位置的数值
* 最低分
* 最高分
* 众数 - 出现频率最高的分数
* 总分 - 所有分数值的总和，但忽略用等级评定的分数';
$string['aggregationcoef'] = '汇总系数';
$string['aggregationcoefextra'] = '额外加分';
$string['aggregationcoefextra_help'] = '当使用“总分”或“简单加权平均分”为汇总算法且“额外加分”被勾选时，成绩项的最高分不会被计入类别的最高分，这可能导致虽然不是所有成绩项都得到了满分，但类别分数是满分（如果网站管理员允许，得分也可能超过最高分）。
当使用“平均分（含额外加分）”汇总算法且额外加分值设为大于0时，在计算完平均分后，额外加分会被乘以额外加分值，然后再与平均分相加得到总分。';
$string['aggregationcoefextrasum'] = '额外加分';
$string['aggregationcoefextrasum_help'] = '如果额外加分框被勾选，此成绩项的最高分不会被加入类别最高分，这可能会导致拿到类别的最高分（如果网站管理员允许，也可能超过最高分），但并不是所有成绩项都是最高分。';
$string['aggregationcoefextraweight'] = '额外加分权重';
$string['aggregationcoefextraweight_help'] = '如果额外加分的权重被设为一个大于0的值，那么该成绩项在汇总时会被当作加分。此值会被当作一个因数与成绩相乘，然后再被加入总分，以计算平均分。';
$string['aggregationcoefweight'] = '成绩项权重';
$string['aggregationcoefweight_help'] = '权重在成绩汇总时被使用，它能影响同一分类下不同成绩项的重要性。';
$string['aggregationposition'] = '汇总位置';
$string['aggregationposition_help'] = '此设置决定类别和成绩的总分是显示在成绩单的第一列还是最后一列。';
$string['aggregationsvisible'] = '可用的汇总类型';
$string['aggregationsvisiblehelp'] = '选择所有可以使用的成绩汇总类型。按住ctrl键选择多个。';
$string['allgrades'] = '按分类统计所有分数';
$string['allstudents'] = '所有学生';
$string['allusers'] = '所有用户';
$string['autosort'] = '自动分类';
$string['availableidnumbers'] = '可用的ID号';
$string['average'] = '平均值';
$string['averagesdecimalpoints'] = '列平均分小数位数';
$string['averagesdecimalpoints_help'] = '此设置决定每个平均分显示的小数位数，又或者是使用类别或成绩项的小数位数设置（继承）。';
$string['averagesdisplaytype'] = '列平均分显示方式';
$string['averagesdisplaytype_help'] = '此设置决定平均分显示为数值、百分比还是分数段，或者是使用类别或成绩项的显示设置（继承）。';
$string['backupwithoutgradebook'] = '备份时不包括成绩薄设置';
$string['badgrade'] = '提供的成绩不可用';
$string['badlyformattedscale'] = '请输入若干个英文逗号分隔的值（至少要有两个值）。';
$string['baduser'] = '提供的用户不可用';
$string['bonuspoints'] = '奖励分数';
$string['bulkcheckboxes'] = '大量的checkbox';
$string['calculatedgrade'] = '计算成绩';
$string['calculation'] = '计算方法';
$string['calculation_help'] = '成绩计算器是一个用来确定成绩的公式。该公式应该以等号（=）开始，可以使用常见的数学运算，比如max、min和sum。如果需要，也可以包含其它成绩项。只需在公式中输入它们的ID号，并用两个方括号括起来。';
$string['calculationadd'] = '添加计算方法';
$string['calculationedit'] = '编辑计算方法';
$string['calculationsaved'] = '计算方法已保存';
$string['calculationview'] = '查看计算方法';
$string['cannotaccessgroup'] = '无法访问所选组的成绩，抱歉。';
$string['categories'] = '类别';
$string['categoriesanditems'] = '类别和项';
$string['categoriesedit'] = '编辑类别和项';
$string['category'] = '类别';
$string['categoryedit'] = '编辑类别';
$string['categoryname'] = '类别名称';
$string['categorytotal'] = '类别总分';
$string['categorytotalfull'] = '{$a->category}总分';
$string['categorytotalname'] = '类别总分名';
$string['changedefaults'] = '更改默认设置';
$string['changereportdefaults'] = '更改报表默认设置';
$string['chooseaction'] = '请选择一种方式';
$string['choosecategory'] = '选择类别';
$string['combo'] = '标签页和下拉菜单';
$string['compact'] = '学习契约';
$string['componentcontrolsvisibility'] = '在活动设置中控制是否隐藏该成绩项。';
$string['contract'] = '学习契约类别';
$string['controls'] = '控制';
$string['courseavg'] = '课程平均值';
$string['coursegradecategory'] = '课程成绩类别';
$string['coursegradedisplaytype'] = '课程成绩显示方式';
$string['coursegradedisplayupdated'] = '课程成绩显示方式已更新';
$string['coursegradesettings'] = '课程成绩设置';
$string['coursename'] = '课程名称';
$string['coursescales'] = '课程等级';
$string['coursesettings'] = '课程设置';
$string['coursesettingsexplanation'] = '课程设置决定课程的参与者会看到什么样的成绩单';
$string['coursetotal'] = '课程总分';
$string['createcategory'] = '创建类别';
$string['createcategoryerror'] = '无法创建新类别';
$string['creatinggradebooksettings'] = '创建成绩单设置';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = '父类别汇总算法';
$string['curveto'] = '曲线拟合到';
$string['decimalpoints'] = '保留几位小数';
$string['decimalpoints_help'] = '此设置指定显示在每个成绩中的小数位数。成绩计算仍按照5位小数的精度进行，不受此设置影响。';
$string['default'] = '默认值';
$string['defaultprev'] = '默认({$a})';
$string['deletecategory'] = '删除分类';
$string['disablegradehistory'] = '禁用成绩历史记录';
$string['disablegradehistory_help'] = '禁用成绩相关表中的历史记录功能。这可能会给服务器性能带来一点提升，并且节约数据库空间。';
$string['displaylettergrade'] = '显示分数段';
$string['displaypercent'] = '显示百分比';
$string['displaypoints'] = '显示分数';
$string['displayweighted'] = '显示加权成绩';
$string['dropdown'] = '下拉菜单';
$string['droplow'] = '去掉最低分';
$string['droplow_help'] = '此设置使指定数量的最低分被排除在成绩汇总之外。';
$string['dropped'] = '放弃';
$string['dropxlowest'] = '去掉X个最低分';
$string['dropxlowestwarning'] = '注意：如果您使用了去掉x个最低分的功能，则评分时会假设分类中的所有成绩项的满分相同。如果不同，结果将不可预测。';
$string['duplicatescale'] = '复制等级';
$string['edit'] = '编辑';
$string['editcalculation'] = '编辑计算方法';
$string['editcalculationverbose'] = '编辑{$a->category}{$a->itemmodule}的{$a->itemname}的计算方法';
$string['editfeedback'] = '编辑反馈';
$string['editgrade'] = '编辑成绩';
$string['editgradeletters'] = '编辑分数段';
$string['editoutcome'] = '编辑能力';
$string['editoutcomes'] = '编辑能力';
$string['editscale'] = '编辑等级';
$string['edittree'] = '类别和项';
$string['editverbose'] = '编辑{$a->category}{$a->itemmodule}{$a->itemname}';
$string['enableajax'] = '启用AJAX';
$string['enableajax_help'] = '添加AJAX功能至成绩单中，将简化和加速常用操作。这取决于在用户浏览器端Javascript功能是否启用。';
$string['enableoutcomes'] = '启用能力';
$string['enableoutcomes_help'] = '对能力（也可以叫成果、目标、水平或标准）的支持意味着我们可以使用一个或多个与能力绑定的等级进行评分。启用能力后，全站都可以使用这种特别的评分方法。';
$string['encoding'] = '编码';
$string['errorcalculationnoequal'] = '公式必须以等号开始(=1+2)';
$string['errorcalculationunknown'] = '公式不可用';
$string['errorgradevaluenonnumeric'] = '您输入的低或高分数不是数字';
$string['errornocalculationallowed'] = '该项不允许被计算';
$string['errornocategorisedid'] = '无法获得一个未分类的ID！';
$string['errornocourse'] = '无法获得课程信息';
$string['errorreprintheadersnonnumeric'] = '重新打印表头的值必须是数字';
$string['errorsavegrade'] = '不能保存成绩，抱歉。';
$string['errorupdatinggradecategoryaggregateonlygraded'] = '在更新ID为{$a->id}的成绩类别的“只汇总非空成绩”设置时出错';
$string['errorupdatinggradecategoryaggregateoutcomes'] = '在更新ID为{$a->id}的成绩类别的“汇总中包括能力”设置时出错';
$string['errorupdatinggradecategoryaggregatesubcats'] = '在更新ID为{$a->id}的成绩类别的“汇总中包含子类别”设置时出错';
$string['errorupdatinggradecategoryaggregation'] = '在更新ID为{$a->id}的成绩类别时出错';
$string['errorupdatinggradeitemaggregationcoef'] = '在更新ID为{$a->id}的成绩项的汇总系数（权重或额外加分）时出错';
$string['excluded'] = '排除';
$string['excluded_help'] = '勾选后，此项成绩将不会被包含在任何成绩汇总中。';
$string['expand'] = '扩展类别';
$string['export'] = '导出';
$string['exportalloutcomes'] = '导出所有能力';
$string['exportfeedback'] = '导出内容中包括反馈';
$string['exportplugins'] = '导出插件';
$string['exportsettings'] = '导出设置';
$string['exportto'] = '导出至';
$string['extracreditwarning'] = '注意：把一个分类中的所有成绩项都设为额外加分，是一个高效的将它们排除在分数计算之外的办法。因为这样就不会有总分了';
$string['feedback'] = '反馈';
$string['feedback_help'] = '在此框输入关于成绩的任何补充说明、评论等。';
$string['feedbackadd'] = '添加反馈';
$string['feedbackedit'] = '编辑反馈';
$string['feedbacksaved'] = '反馈已保存';
$string['feedbackview'] = '预览反馈';
$string['finalgrade'] = '最终成绩';
$string['finalgrade_help'] = '如果覆盖选择框被勾选，那么可以直接添加或修正成绩。';
$string['fixedstudents'] = '锁住学生信息列';
$string['fixedstudents_help'] = '让学生信息列静止，这样就可以水平滚动成绩单，而不会看不到学生信息列。';
$string['forceoff'] = '强制：关闭';
$string['forceon'] = '强制：打开';
$string['forelementtypes'] = '给选择的{$a}';
$string['forstudents'] = '给学生';
$string['full'] = '全屏';
$string['fullmode'] = '完整视图';
$string['fullview'] = '完整视图';
$string['generalsettings'] = '常规设置';
$string['grade'] = '成绩';
$string['gradeadministration'] = '成绩管理';
$string['gradeanalysis'] = '成绩分析';
$string['gradebook'] = '成绩单';
$string['gradebookhiddenerror'] = '当前成绩单设置为对学生隐藏所有信息。';
$string['gradebookhistories'] = '成绩历史记录';
$string['gradeboundary'] = '分数段区间';
$string['gradeboundary_help'] = '此设置决定可以被分配分数段的最小百分比。';
$string['gradecategories'] = '成绩类别';
$string['gradecategory'] = '成绩类别';
$string['gradecategoryonmodform'] = '成绩类别';
$string['gradecategoryonmodform_help'] = '此设置控制此活动的成绩放在成绩单的哪个类别中。';
$string['gradecategorysettings'] = '成绩类别设置';
$string['gradedisplay'] = '成绩显示';
$string['gradedisplaytype'] = '成绩显示方式';
$string['gradedisplaytype_help'] = '此设置决定在评分人和用户报表中如何显示成绩。
* 分数 - 确切的分值
* 百分比
* 分数段 - 用来表示分数所处范围的文字';
$string['gradedon'] = '评分：{$a}';
$string['gradeexport'] = '成绩导出';
$string['gradeexportdecimalpoints'] = '导出成绩保留小数点位数';
$string['gradeexportdecimalpoints_desc'] = '导出时显示的小数位数。在导出时可以更改这个选项。';
$string['gradeexportdisplaytype'] = '导出成绩的显示方式';
$string['gradeexportdisplaytype_desc'] = '成绩在导出时可以以分数、百分比（基于最低分和最高分计算）或分数段（优秀、良好、及格等等）方式显示。在导出时可以更改这个选项。';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item}{$a->feedback}';
$string['gradehelp'] = '成绩帮助';
$string['gradehistorylifetime'] = '成绩历史记录时间';
$string['gradehistorylifetime_help'] = '指定在成绩表中历史记录保存的时间。推荐保存为尽可能长的时间，如果遇到性能问题或者磁盘空间不足，可以将该值设置得小些。';
$string['gradeimport'] = '成绩导入';
$string['gradeitem'] = '成绩项';
$string['gradeitemaddusers'] = '不参与评分';
$string['gradeitemadvanced'] = '高级成绩项选项';
$string['gradeitemadvanced_help'] = '被选择的项目，将在编辑成绩项时作为高级选项。';
$string['gradeitemislocked'] = '该活动在成绩薄中被锁定。因此该活动中的成绩更改将不会复制到成绩薄中，除非该功能锁定解除。';
$string['gradeitemlocked'] = '评分锁定';
$string['gradeitemmembersselected'] = '不参与评分';
$string['gradeitemnonmembers'] = '参与评分';
$string['gradeitemremovemembers'] = '参与评分';
$string['gradeitems'] = '成绩项';
$string['gradeitemsettings'] = '成绩项设置';
$string['gradeitemsinc'] = '成绩项将被包含';
$string['gradeletter'] = '分数段';
$string['gradeletter_help'] = '分数段是一系列表示分数所处范围的文字，比如“优秀、中等、良好、及格、...”，“A、B、C、...”';
$string['gradeletternote'] = '要删除一个分段，只需清空上面三项中的任何一项，并提交。';
$string['gradeletters'] = '分数段';
$string['gradelocked'] = '分数段锁定';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = '最高分';
$string['grademax_help'] = '此设置决定使用数值成绩类型时的最高分。基于活动的成绩项的最高分在活动设置页面设置。';
$string['grademin'] = '最低分';
$string['grademin_help'] = '此设置决定使用数值成绩类型时的最低分';
$string['gradeoutcomeitem'] = '成绩能力项';
$string['gradeoutcomes'] = '能力';
$string['gradeoutcomescourses'] = '课程能力';
$string['gradepass'] = '及格线';
$string['gradepass_help'] = '如果一个成绩项要求用户必须至少达到某个分数才算通过，那么在这里设置这个最低分。此值用来计算活动和课程的完成情况。在成绩单中，通过的成绩将显示为绿色，而不通过的显示为红色。';
$string['gradepreferences'] = '成绩使用偏好';
$string['gradepreferenceshelp'] = '成绩使用偏好帮助';
$string['gradepublishing'] = '启用成绩发布功能';
$string['gradepublishing_help'] = '在成绩导出和导入中启用发布功能：可以通过访问一个URL地址获得导出的成绩，并且不需要登录到Moodle网站中。成绩同样可以通过一个可访问的URL地址导入（这就意味着可以将成绩从一个Moodle网站导入到另一个Moodle网站中）。默认只有网站管理员可以使用该功能，如果要让其他用户使用该功能，那么在分配权限前确保用户已经明白如何操作。（书签共享、下载加速和IP限制等可能会带来安全威胁）';
$string['gradereport'] = '成绩报表';
$string['graderreport'] = '成绩单';
$string['grades'] = '成绩';
$string['gradesforuser'] = '{$a->user}的成绩';
$string['gradesonly'] = '仅显示单项成绩';
$string['gradessettings'] = '成绩设置';
$string['gradetype'] = '成绩类型';
$string['gradetype_help'] = '有4种成绩类型：
* 无 - 无给成绩的可能
* 数值 - 一个有最大和最小值的数值
* 等级 - 某个列表中的一项
* 文本 - 只有反馈
只有数值和等级成绩类型可以做总成绩计算。基于活动的成绩项的类型在活动设置页面设置。';
$string['gradeview'] = '查看成绩';
$string['gradeweighthelp'] = '成绩权重帮助';
$string['groupavg'] = '组平均分';
$string['hidden'] = '隐藏';
$string['hidden_help'] = '如勾选，成绩会对学生隐藏。如需要，可以设置隐藏期限，这样评分结束后就可以向学生公布成绩。';
$string['hiddenasdate'] = '显示隐藏成绩的提交日期';
$string['hiddenasdate_help'] = '如果用户不能看到隐藏的成绩，那么显示提交时间，而不是“-”。';
$string['hiddenuntil'] = '隐藏到';
$string['hiddenuntildate'] = '在{$a}时间之内隐藏';
$string['hideadvanced'] = '隐藏高级功能';
$string['hideaverages'] = '隐藏平均分';
$string['hidecalculations'] = '隐藏计算方法';
$string['hidecategory'] = '隐藏';
$string['hideeyecons'] = '隐藏 显示/隐藏 图标';
$string['hidefeedback'] = '隐藏反馈';
$string['hideforcedsettings'] = '隐藏强制设置';
$string['hideforcedsettings_help'] = '不要在评分界面中显示强制设置。';
$string['hidegroups'] = '隐藏组';
$string['hidelocks'] = '隐藏锁定';
$string['hidenooutcomes'] = '显示能力';
$string['hidequickfeedback'] = '隐藏快速反馈';
$string['hideranges'] = '隐藏分数范围';
$string['hidetotalifhiddenitems'] = '如果含有隐藏的成绩项，就隐藏总分';
$string['hidetotalifhiddenitems_help'] = '此设置决定包含隐藏成绩项的总分是显示给学生，还是被替换为连字符（-）。如果显示，总分的计算可以包含或不包含隐藏的成绩。
如果隐藏的成绩没被包含，总分可能会和教师在成绩报表中看到的不同，因为教师总是能看到包含所有成绩的总分，无论隐藏的还是不隐藏的。如果隐藏的成绩被包含，学生可能能计算出隐藏的成绩是多少。';
$string['hidetotalshowexhiddenitems'] = '显示除了隐藏成绩项以外的总分';
$string['hidetotalshowinchiddenitems'] = '显示包含隐藏成绩项的总分';
$string['hideverbose'] = '隐藏 {$a->category}{$a->itemmodule}中的{$a->itemname}';
$string['highgradeascending'] = '按最高分升序排序';
$string['highgradedescending'] = '按最高分降序排序';
$string['highgradeletter'] = '高至';
$string['identifier'] = '用户身份确认';
$string['idnumbers'] = 'ID号';
$string['import'] = '导入';
$string['importcsv'] = '导入CSV';
$string['importcustom'] = '作为自定义能力导入（仅在此课程中）';
$string['importerror'] = '发生错误，脚本调用参数不正确。';
$string['importfailed'] = '导入失败';
$string['importfeedback'] = '导入反馈';
$string['importfile'] = '导入文件';
$string['importfilemissing'] = '没有接收到文件，返回表单重新确认';
$string['importfrom'] = '从哪里导入';
$string['importoutcomenofile'] = '上传的文件为空或损坏。请校验文件格式是否正确，在{$a}行发现问题；是由于数据行没有与第一行的列项匹配或者已导入的文件头丢失所触发的问题。请查看已导出的文件中的头文件的举例说明。';
$string['importoutcomes'] = '导入能力';
$string['importoutcomes_help'] = '可以从csv文件导入能力。文件格式和能力导出的csv文件一致。';
$string['importoutcomesuccess'] = '已导入能力"{$a->name}"，ID：#{$a->id}。';
$string['importplugins'] = '导入插件';
$string['importpreview'] = '导入预览';
$string['importsettings'] = '导入设置';
$string['importskippednomanagescale'] = '您没有权限添加一个新的等级，因此将跳过能力"{$a}"，因为该能力需要创建等级。';
$string['importskippedoutcome'] = '简称为"{$a}"的能力已经存在，因此跳过导入文件中的同名项。';
$string['importstandard'] = '作为标准能力导入';
$string['importsuccess'] = '成绩导入成功';
$string['importxml'] = '导入XML';
$string['includescalesinaggregation'] = '在汇总中包括等级';
$string['includescalesinaggregation_help'] = '您可以更改是否将等级以数字的形式，在所有课程的所有成绩薄中进行汇总。警告：更改该设置将强制所有的汇总成绩重新计算。';
$string['incorrectcourseid'] = '课程ID不正确';
$string['incorrectcustomscale'] = '（不正确的自定义等级，请修改）';
$string['incorrectminmax'] = '最低分必须低于最高分';
$string['inherit'] = '继承';
$string['intersectioninfo'] = '学生/成绩信息';
$string['item'] = '成绩项';
$string['iteminfo'] = '成绩项信息';
$string['iteminfo_help'] = '在此输入关于本成绩项的信息。这些信息不会显示在其它地方。';
$string['itemname'] = '成绩项名称';
$string['itemnamehelp'] = '被该模块推入的成绩项名称';
$string['items'] = '成绩项';
$string['itemsedit'] = '编辑成绩项';
$string['keephigh'] = '保留最高分';
$string['keephigh_help'] = '如果设置该选项，将只保留X个最高分。X为本选项选择的值。';
$string['keymanager'] = '密钥管理器';
$string['lessthanmin'] = '键入的{$a->username}的{$a->itemname}成绩低于最低分。';
$string['letter'] = '分数段';
$string['lettergrade'] = '分数段';
$string['lettergradenonnumber'] = '低分或高分输入的不是数值：';
$string['letterpercentage'] = '分数段（百分比）';
$string['letterreal'] = '分数段（分数）';
$string['letters'] = '分数段';
$string['linkedactivity'] = '已链接的活动';
$string['linkedactivity_help'] = '指定一个与此能力有关联的活动。这将作为与成绩无关的评价标准来评定学生的表现。';
$string['linktoactivity'] = '到{$a->name}活动的链接';
$string['lock'] = '锁';
$string['locked'] = '锁定';
$string['locked_help'] = '如勾选，相关的活动就不能再自动更新成绩。';
$string['locktime'] = '在何时之后锁定';
$string['locktimedate'] = '在{$a}之后锁定';
$string['lockverbose'] = '锁定{$a->category}{$a->itemmodule}中的{$a->itemname}';
$string['lowest'] = '最低';
$string['lowgradeletter'] = '低至';
$string['manualitem'] = '手工项';
$string['mapfrom'] = '映射自';
$string['mappings'] = '成绩项映射';
$string['mapto'] = '映射到';
$string['max'] = '最高';
$string['maxgrade'] = '满分';
$string['meanall'] = '全部成绩';
$string['meangraded'] = '非空成绩';
$string['meanselection'] = '列平均分计算';
$string['meanselection_help'] = '当计算每个类别或成绩项的平均分时，是否将无分数的单元格包含在内。';
$string['median'] = '中等';
$string['min'] = '最低';
$string['missingscale'] = '必须选择等级';
$string['mode'] = '模式';
$string['morethanmax'] = '键入{$a->username}的{$a->itemname}成绩高于最高分。';
$string['moveselectedto'] = '将所选项移动到';
$string['movingelement'] = '移动到{$a}';
$string['multfactor'] = '乘数';
$string['multfactor_help'] = '该成绩项中的所有分数将被乘以此系数，但不会超过设定的最大值。例如，如果系数设为2，最高分为100，那么所有低于50的分数会被乘以2，而所有大于等于50的分数会变成100。';
$string['mypreferences'] = '我的偏好';
$string['myreportpreferences'] = '我的成绩报表选项';
$string['navmethod'] = '导航方法';
$string['neverdeletehistory'] = '永远不删除历史记录';
$string['newcategory'] = '新类别';
$string['newitem'] = '新成绩项';
$string['newoutcomeitem'] = '新能力项';
$string['no'] = '否';
$string['nocategories'] = '此课程的分数分类无法添加或找不到';
$string['nocategoryname'] = '未给出类别名称';
$string['nocategoryview'] = '无分类可以看';
$string['nocourses'] = '目前没有课程';
$string['noforce'] = '不强制';
$string['nogradeletters'] = '未设定分数段';
$string['nogradesreturned'] = '未找到成绩';
$string['noidnumber'] = '无ID号';
$string['nolettergrade'] = '无分数段给';
$string['nomode'] = '无';
$string['nonnumericweight'] = '请输入数值：';
$string['nonunlockableverbose'] = '只有{$a->itemname}启用后成绩才能启用。';
$string['nonweightedpct'] = '非加权%';
$string['nooutcome'] = '无能力';
$string['nooutcomes'] = '能力项必须链接到一个课程能力，但是此课程中还没有能力。您想新建一个吗？';
$string['nopublish'] = '不发布';
$string['norolesdefined'] = '在“管理 > 成绩 > 一般设置 > 成绩角色”中没有设置角色';
$string['noscales'] = '能力必须与一个课程等级或全局等级相关联，但是现在没有。您想新建一个吗？';
$string['noselectedcategories'] = '未选择类别';
$string['noselecteditems'] = '为选择项';
$string['notteachererror'] = '只有教师能使用此特性。';
$string['nousersloaded'] = '未加载任何用户';
$string['numberofgrades'] = '成绩数目';
$string['onascaleof'] = '在范围{$a->grademin}至{$a->grademax}中。';
$string['operations'] = '操作';
$string['options'] = '选项';
$string['outcome'] = '能力';
$string['outcome_help'] = '此设置决定此成绩项在成绩单中将用哪个能力代表。';
$string['outcomeassigntocourse'] = '向此课程分配另一个能力';
$string['outcomecategory'] = '在类别中创建能力';
$string['outcomecategorynew'] = '新类别';
$string['outcomeconfirmdelete'] = '确定删除能力"{$a}"吗?';
$string['outcomecreate'] = '添加新能力';
$string['outcomedelete'] = '删除能力';
$string['outcomefullname'] = '全名';
$string['outcomeitem'] = '能力项';
$string['outcomeitemsedit'] = '编辑能力项';
$string['outcomereport'] = '能力报表';
$string['outcomes'] = '能力';
$string['outcomescourse'] = '课程已使用的能力';
$string['outcomescoursecustom'] = '自定义已使用的（无法删除）';
$string['outcomescoursenotused'] = '标准未使用的';
$string['outcomescourseused'] = '标准已使用的（无法移除）';
$string['outcomescustom'] = '自定义能力';
$string['outcomeshortname'] = '简称';
$string['outcomesstandard'] = '标准能力';
$string['outcomesstandardavailable'] = '可用的标准能力';
$string['outcomestandard'] = '标准能力';
$string['outcomestandard_help'] = '每个基本能力都可被全站所有课程使用。';
$string['overallaverage'] = '总平均分';
$string['overridden'] = '覆盖';
$string['overridden_help'] = '勾选后，此成绩项将不能被相关的活动更改。
在成绩单中编辑了一个成绩后，覆盖框会被自动勾选。但是，可以取消它使得相关的活动能更改成绩。';
$string['overriddennotice'] = '您在该活动中的最终成绩将自动调整。';
$string['overridesitedefaultgradedisplaytype'] = '覆盖网站默认值';
$string['overridesitedefaultgradedisplaytype_help'] = '勾选后，课程的分数段和分数范围可以被自由更改，而不是使用网站的缺省设置。';
$string['parentcategory'] = '父类别';
$string['pctoftotalgrade'] = '%的总分';
$string['percent'] = '百分比';
$string['percentage'] = '百分比';
$string['percentageletter'] = '百分比（分数段）';
$string['percentagereal'] = '百分比（分数）';
$string['percentascending'] = '百分比升序';
$string['percentdescending'] = '百分比降序';
$string['percentshort'] = '%';
$string['plusfactor'] = '加数';
$string['plusfactor_help'] = '加数是一个数字，它会在乘数被应用后，被加到该成绩项的每个分数中去。';
$string['points'] = '分数';
$string['pointsascending'] = '分数升序';
$string['pointsdescending'] = '分数降序';
$string['positionfirst'] = '开始';
$string['positionlast'] = '末尾';
$string['preferences'] = '使用偏好';
$string['prefgeneral'] = '常规';
$string['prefletters'] = '分数段和界限';
$string['prefrows'] = '指定行';
$string['prefshow'] = '显示/隐藏 触发器';
$string['previewrows'] = '预览行';
$string['profilereport'] = '用户个人报表';
$string['profilereport_help'] = '在用户个人资料页面中显示成绩单';
$string['publishing'] = '发布';
$string['quickfeedback'] = '快速反馈';
$string['quickgrading'] = '快速评分';
$string['quickgrading_help'] = '如果激活，当编辑模式被打开时，每个成绩都显示为一个文本输入框，可以同时编辑多个成绩。点击更新按钮后，修改会被保存且高亮显示。
注意，当在成绩单中修改一个成绩之后，一个覆盖标记就会被勾选，这意味着相关的活动不能再改变这个成绩。';
$string['range'] = '范围';
$string['rangedecimals'] = '分数段小数位数';
$string['rangedecimals_help'] = '分数段显示时的小数位数';
$string['rangesdecimalpoints'] = '分数范围小数位数';
$string['rangesdecimalpoints_help'] = '此设置决定每个分数范围显示的小数位数，或者使用类别或成绩项的小数位数设置（继承）。';
$string['rangesdisplaytype'] = '分数范围显示方式';
$string['rangesdisplaytype_help'] = '此设置决定分数范围显示为分值、百分比还是分数段，又或者使用类别或成绩项的显示设置（继承）。';
$string['rank'] = '排名';
$string['rawpct'] = '原%';
$string['real'] = '分数';
$string['realletter'] = '分数（分数段）';
$string['realpercentage'] = '分数（百分比）';
$string['regradeanyway'] = '重新评分';
$string['removeallcoursegrades'] = '删除所有成绩';
$string['removeallcourseitems'] = '删除所有成绩项和成绩类别';
$string['report'] = '报表';
$string['reportdefault'] = '默认为{$a}';
$string['reportplugins'] = '报表插件';
$string['reportsettings'] = '报表设置';
$string['reprintheaders'] = '重新打印表头';
$string['respectingcurrentdata'] = '当前设置不可修改';
$string['rowpreviewnum'] = '预览行数';
$string['savechanges'] = '保存更动';
$string['savepreferences'] = '保存使用偏好';
$string['scaleconfirmdelete'] = '您确定要删除等级“{$a}”吗？';
$string['scaledpct'] = '名次%';
$string['seeallcoursegrades'] = '查看所有成绩';
$string['selectalloroneuser'] = '选择所有用户或一个用户';
$string['selectauser'] = '选择一个用户';
$string['selectdestination'] = '选择{$a}的目标文件';
$string['separator'] = '分隔符';
$string['sepcomma'] = '逗号';
$string['septab'] = '制表符';
$string['setcategories'] = '设定类别';
$string['setcategorieserror'] = '在设定权重前必须先设定分类。';
$string['setgradeletters'] = '设定分数段';
$string['setpreferences'] = '设定使用偏好';
$string['setting'] = '设置';
$string['settings'] = '设置';
$string['setweights'] = '设定权重';
$string['showactivityicons'] = '显示活动图标';
$string['showactivityicons_help'] = '是否在活动名称旁边显示活动图标。';
$string['showallhidden'] = '显示隐藏的';
$string['showallstudents'] = '显示所有学生';
$string['showanalysisicon'] = '显示成绩分析图标';
$string['showanalysisicon_desc'] = '是否缺省显示成绩分析图标。如果活动的模块支持的话，成绩分析图标链接到的页面会提供关于成绩细节的解释。';
$string['showanalysisicon_help'] = '如果活动的模块支持的话，成绩分析图标链接到的页面会提供关于成绩细节的解释。';
$string['showaverage'] = '显示平均分';
$string['showaverage_help'] = '是否显示平均分列？如果是从较少的分数计算出的平均分，那么学生可能会估算出其它学生的成绩。考虑到性能因素，如果平均分与任何隐藏分数项相关，那么将只是近似值。';
$string['showaverages'] = '显示平均分';
$string['showaverages_help'] = '是否显示每列的平均分。';
$string['showcalculations'] = '显示计算器';
$string['showcalculations_help'] = '如果激活，当编辑模式被打开时，在每个成绩项和类别旁会显示计算器图标、已计算项目的悬停信息和已计算列的视觉标记。';
$string['showeyecons'] = '显示 显示/隐藏 图标';
$string['showeyecons_help'] = '如果激活，当编辑模式被打开时，每个成绩都会有一个显示/隐藏图标，用来控制它对学生是否可见。';
$string['showfeedback'] = '显示反馈';
$string['showfeedback_help'] = '显示反馈列？';
$string['showgrade'] = '显示成绩';
$string['showgrade_help'] = '显示成绩列？';
$string['showgroups'] = '显示组';
$string['showhiddenitems'] = '显示隐藏项';
$string['showhiddenitems_help'] = '隐藏的成绩项是完全隐藏，还是名字对学生可见。
* 显示隐藏 - 显示隐藏成绩项的名字，但学生成绩被隐藏
* 只隐藏到 - 有“隐藏到”日期的成绩项在到期前会被完全隐藏。到期后会完全显示
* 不显示 - 隐藏的成绩项被完全隐藏';
$string['showhiddenuntilonly'] = '只隐藏到';
$string['showlettergrade'] = '显示分数段';
$string['showlettergrade_help'] = '显示分数段列？';
$string['showlocks'] = '显示锁定';
$string['showlocks_help'] = '如果激活，当编辑模式被打开时，每个成绩都会有一个锁定/解锁图标，用来控制该成绩是否可以被相关的活动自动更新。';
$string['shownohidden'] = '不显示';
$string['shownooutcomes'] = '隐藏能力';
$string['shownumberofgrades'] = '在平均分中显示人数';
$string['shownumberofgrades_help'] = '如果激活，在每个平均分后的括号中显示该平均分是用多少个成绩算出来的。';
$string['showpercentage'] = '显示百分比';
$string['showpercentage_help'] = '是否显示每个成绩的百分比。';
$string['showquickfeedback'] = '显示快速反馈';
$string['showquickfeedback_help'] = '如果激活，当编辑模式被打开时，每个成绩都会显示一个虚线边框的输入框，使您可以立刻编辑多个成绩的反馈信息。点击更新按钮后，更改会被保存且高亮显示。
注意，当在成绩单中修改一个反馈之后，一个覆盖标记就会被勾选，这意味着相关的活动不能再改变这个反馈。';
$string['showrange'] = '显示分数段';
$string['showrange_help'] = '显示分数段列？';
$string['showranges'] = '显示范围';
$string['showranges_help'] = '如果激活，在成绩单的附加行中会显示每个类型和成绩项的分数范围。';
$string['showrank'] = '显示排名';
$string['showrank_help'] = '显示用户每项成绩在课程中的排名？';
$string['showuserimage'] = '显示用户头像';
$string['showuserimage_help'] = '是否在成绩单中的用户名后显示用户头像。';
$string['showverbose'] = '显示{$a->category}{$a->itemmodule}中的{$a->itemname}';
$string['showweight'] = '显示权重';
$string['showweight_help'] = '显示成绩权重列？';
$string['simpleview'] = '简略视图';
$string['sitewide'] = '全站';
$string['sort'] = '排序';
$string['sortasc'] = '升序排列';
$string['sortbyfirstname'] = '以名字排序';
$string['sortbylastname'] = '以姓氏排序';
$string['sortdesc'] = '降序排列';
$string['standarddeviation'] = '标准偏差';
$string['stats'] = '统计';
$string['statslink'] = '统计';
$string['student'] = '学生';
$string['studentsperpage'] = '每页显示的学生数';
$string['studentsperpage_help'] = '在成绩单中每页显示的学生数。';
$string['subcategory'] = '子类别';
$string['submissions'] = '提交';
$string['submittedon'] = '已提交{$a}';
$string['switchtofullview'] = '切换到完整视图';
$string['switchtosimpleview'] = '切换到简略视图';
$string['tabs'] = '标签页';
$string['topcategory'] = '最高的类别';
$string['total'] = '总分';
$string['totalweight100'] = '权重之和为100';
$string['totalweightnot100'] = '权重之和不等于100';
$string['turnfeedbackoff'] = '关闭反馈';
$string['turnfeedbackon'] = '开启反馈';
$string['typenone'] = '无';
$string['typescale'] = '等级';
$string['typescale_help'] = '此设置决定当使用等级评分方式时，选择哪个等级。基于活动的成绩项的等级在活动设置页面设置。';
$string['typetext'] = '文本类型';
$string['typevalue'] = '值';
$string['uncategorised'] = '未分类';
$string['unchangedgrade'] = '成绩未改变';
$string['unenrolledusersinimport'] = '在本次导入中，下列成绩所属的用户还未选修此课：“{$a}”';
$string['unlimitedgrades'] = '分数无上下限';
$string['unlimitedgrades_help'] = '缺省情况，评分时所给的分数不能超过上下限。打开这个选项后，这个限制就不存在了，并且允许在成绩单中直接输入超过100%的成绩。建议只在非高峰期打开这个选项，因为它会使所有成绩被重新计算，可能会导致较高的服务器负荷。';
$string['unlock'] = '解锁';
$string['unlockverbose'] = '解锁 {$a->category}{$a->itemmodule}中的{$a->itemname}';
$string['unused'] = '未使用';
$string['updatedgradesonly'] = '仅导出新的或者已更新的成绩';
$string['uploadgrades'] = '上传成绩';
$string['useadvanced'] = '使用高级功能';
$string['usedcourses'] = '已使用的课程';
$string['usedgradeitem'] = '已使用的成绩项';
$string['usenooutcome'] = '不使用能力';
$string['usenoscale'] = '不使用等级';
$string['usepercent'] = '使用百分比';
$string['user'] = '用户';
$string['userenrolmentsuspended'] = '用户选课暂停';
$string['usergrade'] = '用户{$a->fullname}（{$a->useridnumber}）的成绩项{$a->gradeidnumber}';
$string['userpreferences'] = '用户偏好设置';
$string['useweighted'] = '使用权重';
$string['verbosescales'] = '显示细节';
$string['viewbygroup'] = '小组';
$string['viewgrades'] = '查看成绩';
$string['warningexcludedsum'] = '警告：成绩排除和求和汇总不兼容。';
$string['weight'] = '权重';
$string['weightcourse'] = '为课程使用加权成绩';
$string['weightedascending'] = '加权百分比升序';
$string['weighteddescending'] = '加权百分比降序';
$string['weightedpct'] = '加权%';
$string['weightedpctcontribution'] = '加权%份额';
$string['weightorextracredit'] = '权重或加分';
$string['weights'] = '权重';
$string['weightsedit'] = '编辑权重和加分';
$string['weightuc'] = '权重';
$string['writinggradebookinfo'] = '写成绩单设置';
$string['xml'] = 'XML';
$string['yes'] = '是';
$string['yourgrade'] = '您的成绩';
