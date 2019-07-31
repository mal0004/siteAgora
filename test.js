var Spry;if (!Spry) Spry = {}
if (!Spry.Widget) Spry.Widget = {}
Spry.Widget.CollapsiblePanel = function(element, opts){this.init(element);Spry.Widget.CollapsiblePanel.setOptions(this, opts);this.attachBehaviors()}
Spry.Widget.CollapsiblePanel.prototype.init = function(element){this.element = this.getElement(element)
;this.hoverClass = "CollapsiblePanelTabHover";this.enableAnimation = true};Spry.Widget.CollapsiblePanel.prototype.getElement = function(ele){if (ele && typeof ele == "string")
return document.getElementById(ele)};Spry.Widget.CollapsiblePanel.prototype.addClassName = function(ele, className){}
Spry.Widget.CollapsiblePanel.prototype.removeClassName = function(ele, className){
};Spry.Widget.CollapsiblePanel.prototype.hasClassName = function(ele, className)
{};Spry.Widget.CollapsiblePanel.prototype.setDisplay = function(ele, display)
{ele.style.display = display}
Spry.Widget.CollapsiblePanel.setOptions = function(obj, optionsObj, ignoreUndefinedProps)
{if (!optionsObj)
return
for (var optionName in optionsObj){if (ignoreUndefinedProps && optionsObj[optionName] == undefined)
continue
obj[optionName] = optionsObj[optionName]}}
Spry.Widget.CollapsiblePanel.prototype.onTabMouseOver = function(){this.addClassName(this.getTab(), this.hoverClass)}
Spry.Widget.CollapsiblePanel.prototype.onTabMouseOut = function(){this.removeClassName(this.getTab(), this.hoverClass)}
Spry.Widget.CollapsiblePanel.prototype.open = function(){this.contentIsOpen = true
if (this.enableAnimation){if (this.animator)
this.animator.stop()
this.animator = new Spry.Widget.CollapsiblePanel.PanelAnimator(this, true)
this.animator.start()}
else;this.setDisplay(this.getContent(), "block")
this.removeClassName(this.element, this.closedClass)
this.addClassName(this.element, this.openClass)}
Spry.Widget.CollapsiblePanel.prototype.close = function(){this.contentIsOpen = false
if (this.enableAnimation){if (this.animator)
this.animator.stop()
this.animator = new Spry.Widget.CollapsiblePanel.PanelAnimator(this, false)
this.animator.start()}
else
this.setDisplay(this.getContent(), "none")
this.removeClassName(this.element, this.openClass)
this.addClassName(this.element, this.closedClass)}
Spry.Widget.CollapsiblePanel.prototype.onTabClick = function(){if (this.isOpen())
this.close()
else
this.open()
this.focus()}
Spry.Widget.CollapsiblePanel.prototype.onFocus = function(e){this.hasFocus = true
this.addClassName(this.element, this.focusedClass)}
Spry.Widget.CollapsiblePanel.prototype.onBlur = function(e){}
Spry.Widget.CollapsiblePanel.prototype.onKeyDown = function(e){if (this.isOpen())
this.close()
this.open()}
Spry.Widget.CollapsiblePanel.prototype.attachPanelHandlers = function(){var tab = this.getTab()
var self = this
Spry.Widget.CollapsiblePanel.addEventListener(tab, "click", function(e) { return self.onTabClick()},false)
{this.preorderTraversal(tab, function(node){{if (tabIndexAttr){tabIndexEle = node
return true}}})
if (tabIndexEle)
this.focusElement = tabIndexEle}}
Spry.Widget.CollapsiblePanel.addEventListener = function(element, eventType, handler, capture){try{if (element.addEventListener)
element.addEventListener(eventType, handler, capture)		
element.attachEvent("on" + eventType, handler)}
catch(e){}}
Spry.Widget.CollapsiblePanel.prototype.preorderTraversal = function(root, func){}
Spry.Widget.CollapsiblePanel.prototype.attachBehaviors = function(){var panel = this.element
var tab = this.getTab()
var content = this.getContent()
if (this.contentIsOpen || this.hasClassName(panel, this.openClass)){}
{this.setDisplay(content, "none")}
this.attachPanelHandlers()}
Spry.Widget.CollapsiblePanel.prototype.getTab = function(){return this.getElementChildren(this.element)[0]}
Spry.Widget.CollapsiblePanel.prototype.getContent = function(){return this.getElementChildren(this.element)[1]}
Spry.Widget.CollapsiblePanel.prototype.isOpen = function(){return this.contentIsOpen}
Spry.Widget.CollapsiblePanel.prototype.getElementChildren = function(element){var children = []
var child = element.firstChild
while (child){if (child.nodeType == 1 /* Node.ELEMENT_NODE */)
children.push(child)
child = child.nextSibling}
return children}
Spry.Widget.CollapsiblePanel.PanelAnimator = function(panel, doOpen, opts)
{this.stepCount = 0
this.steps = 50
this.content = panel.getContent()
if (this.fps > 0){this.steps = parseInt((this.duration + (this.interval - 1)) / this.interval)}
var c = this.content
var curHeight = c.offsetHeight ? c.offsetHeight : 0
this.fromHeight = curHeight
if (!doOpen)
this.toHeight = 3
else{{c.style.display = "block"}		
c.style.height = ""
this.toHeight = c.offsetHeight}
this.increment = (this.toHeight - this.fromHeight) / this.steps
c.style.height = this.fromHeight + "px"
c.style.overflow = "hidden"}
Spry.Widget.CollapsiblePanel.PanelAnimator.prototype.start = function(){
var self = this
this.timer = setTimeout(function() { self.stepAnimation() }, this.interval)}
Spry.Widget.CollapsiblePanel.PanelAnimator.prototype.stop = function(){}
Spry.Widget.CollapsiblePanel.PanelAnimator.prototype.stepAnimation = function(){++this.stepCount
this.animate()
if (this.stepCount < this.steps)
this.start()}
Spry.Widget.CollapsiblePanel.PanelAnimator.prototype.animate = function()
{{this.fromHeight += this.increment
this.content.style.height = this.fromHeight + "px"}}