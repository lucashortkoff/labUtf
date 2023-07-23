Funcoes 
    HOME 
    adicionar Pdf  -> addPdf(), recebe os dados via POST , obrigatorio passar 'titulo' e 'arquivo'(input type="file"),
    excluir Pdf -> excluirPdf(), recebe os dados via POST , obrigatorio passar 'id',
    $produtos lista os pdfs,
    'link' -> caminho do arquivo.

    Login
    logar -> authUser(), recebe os dados via POST , obrigatorio passar 'nome' e 'pass',
    deslogar -> Logout(),
    $this->CI->user_Data -> se estiver logado, retorna um array de dados do usuario.

    Parcerias
    $parcerias lista as parcerias.

    Pessoas
    $pessoas lista as pessoas.

Se for adicionado mais arquivos para fazer o html e js, é necessario dar load neles ,$this->load->view('{caminho do arquivo}').