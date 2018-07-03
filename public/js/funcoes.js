$(document).ready(function () {
    $("#butao1").click(function () {
        $.ajax({
            type: 'GET',
            url: '/texto.html',
            data: "",
            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                    $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});


$(document).ready(function () {
    $("#formCadastro").submit(function (e) {
       e.preventDefault(); // evita que o formulário seja submetido
       $.ajax({
            type: 'POST',
            url: '/acao-cadastro-adm',
            data: $("#formCadastro").serializeArray(),
            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                    $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});

$(document).ready(function () {
    $("#formEscolhaAcaoAdm").submit(function (e) {
       e.preventDefault(); // evita que o formulário seja submetido
       $.ajax({
            type: 'POST',
            url: '/acao-cadastro-adm',
            data: $("#formCadastro").serializeArray(),
            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                    $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});


$(document).ready(function () {
    $("#formLogin").submit(function (e) {
       e.preventDefault(); // evita que o formulário seja submetido
       $.ajax({
            type: 'POST',
            url: '/acao-autentica-adm',
            data: $("#formLogin").serializeArray(),
            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                    $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});



$(document).ready(function () {
    $("#formCadastroImovel").submit(function (e) {
       e.preventDefault(); // evita que o formulário seja submetido
       
       var formData = new FormData(this);
       $.ajax({
            type: 'POST',
            url: '/acao-cadastro-imovel',
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            
            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                    $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});

$(document).ready(function () {
    $("#formAlterarImovel").submit(function (e) {
       e.preventDefault(); // evita que o formulário seja submetido
       
       var formData = new FormData(this);
       $.ajax({
            type: 'POST',
            url: '/acao-alterar-imovel',
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            
            success: function (dados) {
                $("#div_retorno").html(dados);
            },
            beforeSend: function () {
                $("#processando").css({display: "block"});
            },
            complete: function () {
                    $("#processando").css({display: "none"});
            },
            error: function () {
                $("#div_retorno").html("Erro em chamar a função.");
                setTimeout(function () {
                    $("#div_retorno").css({display: "none"});
                }, 5000);
            }
        });
    });
});


