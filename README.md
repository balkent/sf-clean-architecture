# sf-clean-architecture
Clean Architecture on Symfony

Install template

> git@github.com:balkent/sf-clean-architecture.git project

> cd project

> symfony server:start

Connect on http://127.0.0.1:8000
You can see Hello word! on web page.

If you want try command:

> php bin\console home:text

You can see Wellcome word! on terminal.

root  
|- config  
|--- |services  
|------ |domain.yaml  
|------ |infrastructure.yaml  
|------ |presentation.yaml  
|  
|- src  
|--- |Domain  
|------ |Contract  
|------ |Model  
|------ |Request  
|------ |Response  
|------ |UseCase  
|  
|--- |Infrastructure  
|------ |Command  
|------ |Controller  
|------ |...  
|  
|--- |Presentation  
|------ |Presenter  
|------ |VueModel  
