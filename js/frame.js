$( document ).ready(function() {
	loadSideBar();
	setFooter();
	$('#main-option').append('<a href="index.php"><i class="menu-icon fa fa-laptop"></i>Inicio </a>');
});

function loadSideBar(){
	var htmlString = '';
	for(var section in sidebar){
		htmlString += '<li class="menu-title">' + sidebar[section].title +'</li>';

		for(var combos in sidebar[section].dropdowns){
			var comboContent = sidebar[section].dropdowns[combos];

			htmlString += '<li class="menu-item-has-children dropdown">'+
                        '<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                        ' <i class="menu-icon '+comboContent.icon+'"></i>'+comboContent.title+'</a>'+
                        '<ul class="sub-menu children dropdown-menu">';

            for(var options in comboContent.content){
            	var optionsContent = comboContent.content[options];

            	htmlString += '<li><i class="'+ optionsContent.icon +'"></i><a href=index.php?controller='+ optionsContent.controller+'&action='+optionsContent.action+'>'+ optionsContent.title+'</a></li>';

            }
            htmlString += '</ul></li>';
		}

		for(var single in sidebar[section].single){
			var singleContent = sidebar[section].single[single];

			htmlString += '<li><a href="index.php?controller='+singleContent.controller+'&action='+ singleContent.action+'"> <i class="menu-icon '+singleContent.icon+'"></i>'+singleContent.title+'</a></li>';
		}
	}

	$('#SideBar').append(htmlString);
}

function setFooter(){
	var year = new Date().getFullYear();
	var footer = '<div class="col-sm-6">Copyright &copy; '+year+' - Alfred</div><div class="col-sm-6 text-right">Diseñado por <a href="#">Alfonso y Jesus</a></div>';
	$('#footer').append(footer);
}
