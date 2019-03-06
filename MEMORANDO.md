## Frontend
- CSS foi utilizado o framework **Bootstrap** através de CDN(um único link) para ter mais produtivadade;
- JS foi utilizado componentes Bootstrap pelo CDN(três scripts: jquery, cloudflare, stackpath), p/fazer bootstrap funcionar de acordo;

## Backend
- Foi decidido trabalhar com a linguagem **PHP** puro, sem uso de framework;
- Seguindo as **PSR-1** e **PSR-2** na codificação;
- Para gerenciar pacotes foi usado o **Composer**;
- Para baixar dependências digitar no Composer: composer dump-autoload -o;
- Para carragemento automático foi implementado o autoload do Composer assim trabalhando com a **PSR-4** seguindo as boas práticas;
- Padrão adotado para o projeto foi DAO;

## Infraestrutura
- Banco de dados **MySQL**;
- Criado 4 tabelas sendo elas: client, agency, account e transaction;
- Provedor **000webhost**;