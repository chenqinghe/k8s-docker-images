# k8s-docker-images

构建安装kubernetes时使用的docker镜像

# 构建方法
利用[dockerhub](https://hub.docker.com)进行构建。

### 1.创建自动构建仓库
1.选择github
![step 1](https://github.com/chenqinghe/k8s-docker-images/blob/image/1.png)
2.选择构建镜像的仓库
![step 2](https://github.com/chenqinghe/k8s-docker-images/blob/image/2.png)
3.修改repository名称为镜像名称
![step 3](https://github.com/chenqinghe/k8s-docker-images/blob/image/3.png)

### 2.设置自动构建钩子
进入Build settings，填入相应信息
![step 4](https://github.com/chenqinghe/k8s-docker-images/blob/image/4.png)

点击Trigger,等待构建即可。
