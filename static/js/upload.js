    class Upload{
        constructor(){
            this.lists=[];
            this.mes=[];
            this.obj;
            this.type=['image/jpeg','image/png','image/gif'];
            this.size=1024*1024*5;
            this.data;
            //外面大盒子的css
            this.divstyle={width:500,height:'auto',border:'1px solid #ccc',overflow: 'hidden',position:'relative'};
            //选文件的div的css
            this.divbtnstyle={width:100,height:30}
            //选择文件的input
            this.inputstyle={width:100,height:30,opacity:0,position:'absolute',top:0,left:0,'z-index':100};
            //span的css
            this.ssstyle={width:100,height:30,display:'block',background:'#ccc','text-align': 'center',position:'absolute',top:0,left:0}
        }


        createView(params){
            //创建容器
            this.createBox(params.box,params.parent,()=>{
                //创建上传按钮
                this.createSelectBtn(params.SelectBtn);
                //创建提交按钮
                this.createTijiaoBtn(params.TijiaoBtn);
                //
                this.createThumb(params.P);
                //创建图片的容器
                this.createList(params.Imgdiv);
            });

        }


        createBox(box,parent={},fun){
            if(box){
                this.box=box;
                return;
            }
            this.parent=parent;
            var div=document.createElement("div");
            this.box=div;
            this.parent.appendChild(this.box);
            div.style.cssText="width:"+this.divstyle.width+"px;height:"+this.divstyle.height+"px;border:"+this.divstyle.border+";overflow:"+this.divstyle.overflow+";position:"+this.divstyle.position;
            fun();
        }

        createSelectBtn(SelectBtn){
            if(SelectBtn){
                this.Selectbtn=SelectBtn;
                return;
            }
            var divbtn=document.createElement("div");
            divbtn.style.cssText="width:"+this.divbtnstyle.width+"px;height:"+this.divbtnstyle.height+"px";
            this.box.appendChild(divbtn);


            var input=document.createElement('input');
            this.Selectbtn=input;
            divbtn.appendChild(input);
            input.type="file";
            input.accept=this.type;
            input.multiple="multiple";
            input.style.cssText="width:"+this.inputstyle.width+"px;height:"+this.inputstyle.height+"px;opacity:"+this.inputstyle.opacity+";position:"+this.inputstyle.position+";top:"+this.inputstyle.top+";left:"+this.inputstyle.left+";z-index:"+"100";
            var ss=document.createElement('span');
            this.box.appendChild(ss);
            ss.innerHTML="+";
            ss.style.cssText="width:100px;height:30px;display:block;background:#ccc;text-align: center;position:absolute;top:0;left:0;"
        }

        createTijiaoBtn(TijiaoBtn){
            if(TijiaoBtn){
                this.TijiaoBtn=TijiaoBtn;
                return;
            }
            var TijiaoBtn=document.createElement('div');
            this.TijiaoBtn=TijiaoBtn;
            this.box.appendChild(TijiaoBtn);
            var Submit_input=document.createElement('div');
            Submit_input.innerHTML="上传";
            Submit_input.style.cssText="width:100px;height:30px;display: block;background:orange;text-align: center;border:1px solid #ccc;";
            TijiaoBtn.appendChild(Submit_input);
        }


        createThumb(ele){
            if(ele){
                this.P=ele;
            }
            var pp=document.createElement('div');
            this.pp=pp;
            this.box.appendChild(this.pp);
            this.pp.style.cssText="width:100%;height:auto;box-sizing:border-box;overflow:hidden;border:1px solid #000;display:flex;justify-content:space-around";
            this.box.insertBefore(this.pp,this.TijiaoBtn);
        }

        createList(Imgdiv){
            if(Imgdiv){
                this.Imgdiv=Imgdiv;
                return;
            }
            //1.定义图片的容器
            var img_div=document.createElement("div");
            img_div.className="aa";
            img_div.style.cssText="width:17%;height:140px;float:left;position:relative;margin:20px;";
            this.pp.appendChild(img_div);

            //2.定义图片
            var img=document.createElement('img');
            img.style.cssText="width:100%;height:100%";
            img_div.appendChild(img);
            //3.定义进度条
            var load=document.createElement('div');
            img_div.appendChild(load);
            load.style.cssText="width:100%;height:5px;border:1px solid #000;position:absolute;bottom:0;left:0;";
            //4.定义进度条的背景
            var back=document.createElement('div');
            load.appendChild(back);
            back.style.cssText="width:0;height:100%;background:red;position:absolute;bottom:0;left:0;";
            //5.定义提示语
            var message=document.createElement('div');
            this.message=message;
            message.innerHTML="正确";
            img_div.appendChild(message);
            message.style.cssText="width:60%;height:30px;background:#ccc;text-align:center;line-height:30px;position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;display:none";
            //6.定义删除按钮
            var del=document.createElement('div');
            del.innerHTML="删除";
            img_div.appendChild(del);
            del.style.cssText="position:absolute;right:0;top:0;display:none;background:red;";
            img_div.onmouseover=function(){
                del.style.display="block";
            }
            img_div.onmouseout=function(){
                del.style.display="none";
            }
            this.change();
            return {
                list:img_div,
                img:img,
                back:back,
                del:del,
                message:message,
            };

        }


        change(){
            let that=this;
            this.Selectbtn.onchange=function(){
                // console.log(this.files);
                that.data=Array.prototype.slice.call(this.files);
                // console.log(that.data);
                that.check();
            }
        }

        check(){
            let that=this;
            let arr=[];
            for(let i=0;i<this.data.length;i++){
                arr[i]=this.data[i];
            }
            for(let i=0;i<arr.length;i++){
                let filereader=new FileReader();
                let obj=this.createList();
                this.obj=obj;

                filereader.readAsDataURL(arr[i]);
                filereader.onload=(e)=> {
                    if(arr[i].size<this.size){
                        if(this.type.indexOf(arr[i].type)>-1){
                            obj.img.src = e.target.result;
                        }else{
                            obj.message.style.display="block";
                            obj.message.innerHTML="格式不正确";
                            for(let j=0;j<arr.length;j++){
                                if(arr[i]===this.data[j]){
                                    this.data[j].splice(0,1);
                                }
                            }
                        }
                    }else{
                        obj.message.innerHTML="图片太大";
                        obj.message.style.display="block";
                        for(let j=0;j<arr.length;j++){
                            if(arr[i]===this.data[j]){
                                this.data.splice(j,1);
                            }
                        }
                    }
                    // obj.del.onclick=function(){
                    //     this.parentNode.parentNode.removeChild(this.parentNode);
                    // }
                    this.lists.push(obj);
                    // console.log(this.lists);

                    for(let q=0;q<this.lists.length;q++){
                        this.lists[q].del.index=q;
                        this.lists[q].del.onclick=function(){
                            this.parentNode.parentNode.removeChild(this.parentNode);
                            that.data.splice(this.index,1);
                            // that.data.splice(this.index,1);
                        }
                    }

                }
            }
        }


        up(url,fun){
            this.TijiaoBtn.onclick = ()=> {
                for(let i=0;i<this.data.length;i++){
                    let formdata=new FormData();
                    formdata.append('file',this.data[i]);
                    let ajax=new XMLHttpRequest();
                    ajax.onload=()=>{
                        console.log(ajax.responseText);
                        fun(ajax.responseText);
                        console.log(i);
                        if(ajax.responseText=="ok"){
                            this.lists[i].message.innerHTML="ok";

                            this.lists[i].message.style.display="block";
                            // console.log(this.lists[i].message.innerHTML="ok");
                        }
                    };
                    ajax.upload.onprogress=(e)=>{
                        // console.log(e);
                        let loaded=e.loaded;
                        let total=e.total;
                        let loadwidth=total/loaded*100+"%";
                        let back=this.lists[i].back;
                        back.style.width=loadwidth;
                    }

                    ajax.open('post',url);
                    ajax.send(formdata);
                }
            }
        }
    }


