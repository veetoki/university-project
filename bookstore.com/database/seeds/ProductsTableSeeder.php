<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory(Product::class,50)->create()->each(function($product){
      //   $arr = [];
      //   for ($i = 0; $i <= rand(0,2); $i++) {
      //     if ($i == 0) {
      //       $arr[] = rand(1,15);
      //     }
      //     if ($i == 1) {
      //       $arr[] = rand(16,35);
      //     }
      //     if ($i == 2) {
      //       $arr[] = rand(36,50);
      //     }
      //   } 
      //   $product->tags()->sync($arr);        
      // });
      Product::create([
        'name' => 'Những Câu Đố Tư Duy Và Logic Xứ Canterbury',
        'code' => strtoupper(str_random(6)),
        'author' => 'Henry Ernest Dudeney ',
        'translator' => 'Nguyễn Tiến Dũng , Lê Bích Phượng ',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Nước Anh, quê hương của Newton và Shakespear, là một trong những cái nôi của văn hóa và khoa học thế giới. Một trong những truyền thống văn hóa của người Anh, được mọi tầng lớp nhân dân hưỏng ứng, chính là đố vui. Đó là những câu đố về lô gíc, chiến lược, toán học, v.v. thú vị cho cả trẻ em và ngưòi lỏn, không những là một trò giải trí lành mạnh, mà còn giúp mọi người phát triển tư duy, thông minh sáng suốt lên.\nChính vì vậy, chúng tôi rất hân hạnh khi được giới thiệu với bạn đọc tuyển tập các câu đố nổi tiếng này của nước Anh, đã được tác giả Henry Ernest Dudeney ngưòi Anh viết thành sách nhan đề The Can¬terbury Puzzles and Other Curious Problems. Nhiều câu đố trong số này có thể coi là kinh điển và là một phần không thể thiếu trong nền tảng kiến thức văn hóa chung.\nMột điểm đặc biệt thú vị của quyển sách này là nó không chỉ gồm các câu đố, mà còn là những câu chuyện có tính văn học, có nhân vật và cốt truyện kèm theo cả những vần thơ. Kê’ cả nếu bạn đọc không thích thú lắm với việc giải đố, thì cũng sẽ tìm thấy nhiều điều thú vị về nước Anh trong quyển sách này.\nHy vọng rằng quyển sách câu đố này sẽ đem lại nhiều niềm vui cho bạn đọc, từ 8 đến 88 tuổi!\nMời bạn đón đọc.",
        'regular_price' => 65000,
        'sale_price' => 52000,
        'original_price' => 52000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt '],
          ['name' => 'Số trang', 'value' => '216'],
          ['name' => 'Kích thước', 'value' => '14.5 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Sputnik'],
          ['name' => 'Khối lượng', 'value' => '286.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '06/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Học Tập Cũng Cần Chiến Lược',
        'code' => strtoupper(str_random(6)),
        'author' => 'Joe Landsberger ',
        'translator' => 'Nhiều dịch giả ',
        'publisher' => 'Nxb Lao động',
        'summary' => "Vài năm trước, tôi tình cờ đọc được Học tập cũng cần chiến lược (Study Guides and Strategies-SGS) trên trang web www.studygs.net, tác giả là Joe Landsberger ‒ lúc đó là chuyên viên thiết kế chương trình giảng dạy và tư vấn giáo dục thuộc trường Đại học St. Thomas, Mỹ. Tôi thật sự ấn tượng trước sự đơn giản, phạm vi ứng dụng, tính hiệu quả và khả năng tiếp cận đa ngữ của chương trình này và thường giới thiệu Học tập cũng cần chiến lược cho các sinh viên của mình.\nHàng triệu người trên thế giới đã sử dụng và công nhận hiệu quả của Học tập cũng cần chiến lược. Đó là thành quả của niềm đam mê không vụ lợi, là sản phẩm mang tính cộng đồng cao và thể hiện tầm nhìn chiến lược nhằm kết nối mọi người trên thế giới có chung mục đích và khát vọng giúp đỡ học sinh, sinh viên thành công trên con đường học tập.\nNăm 2005, tôi có ý tưởng biên dịch nguồn tài liệu trên trang web này sang tiếng Việt khi thấy Học tập cũng cần chiến lược cần thiết với sinh viên Việt Nam. Mặc dù chưa có cơ hội gặp trực tiếp Joe Landsberger nhưng tôi có cảm giác chúng tôi đã là những người bạn. Nhận được sự ủng hộ nhiệt tình của ông, thông qua Hội Sinh viên VietAbroader, tôi đã khuyến khích những sinh viên Việt Nam đang học tập tại Mỹ hợp tác cùng tôi biến ý tưởng đó thành hiện thực. Tôi đã nhận được sự giúp đỡ nhiệt tình từ chị Nguyễn Thanh Hương – dịch giả đầu tiên, trợ lý Quỹ Freeman và là sinh viên trường Đại học Lafayette Pennsylvania, Mỹ; cùng nhiều dịch giả khác như Đào Tú Anh, Đỗ Ngọc Bích (Hà Nội), Trần Hà Hải (Thành phố Hồ Chí Minh). Cuốn sách bạn đang cầm trên tay là ấn phẩm thứ ba được xuất bản theo chương trình Study Guides and Strategies, sau tiếng Anh và tiếng Tây Ban Nha.\n_TMG_\nMời bạn đón đọc.",
        'regular_price' => 99000,
        'sale_price' => 79000,
        'original_price' => 79000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt '],
          ['name' => 'Số trang', 'value' => '280'],
          ['name' => 'Kích thước', 'value' => '13 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '308.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '07/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Luật Trí Não',
        'code' => strtoupper(str_random(6)),
        'author' => 'John Medina',
        'translator' => 'Mai Khanh',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Học tập và làm việc hiệu quả rõ ràng không dừng lại ở lượng kiến thức được truyền thụ trong nhà trường hay trong công việc mà là cách xử lý lượng kiến thức đó như thế nào và sau đó sử dụng chúng ra sao. Nhiều thập kỷ qua, giáo dục đã quên đi phần quan trọng của việc xử lý và sử dụng ấy mà mới giảng dạy trong các trường sư phạm, giúp cho các nhà giáo hiểu được cơ chế nhận thức, cơ chế hoạt động cơ bản, cũng như cơ chế ghi nhớ và tư duy của não người. Đối với nhiều nhà giáo, giảng viên, những kiến thức ấy có lẽ cũng đã phần nào phát huy được tác dụng của họ.\nThế nhưng, đâu chỉ có người dạy mới cần biết cách vận dụng năng lực trí não sao cho hiệu quả. Người truyền thụ và người được truyền thụ kiến thức đều quan trọng như nhau. Vì vậy mà những kiến thức về não và vận dụng trí não hiệu quả phải trở thành kiến thức cơ bản được giảng dạy rộng rãi, sao cho người dạy và người học đều có khả năng tư duy hiệu quả. Hơn thế nữa, nắm vững quy luật trí não là bước đi đầu tiên trong việc khai phá những tiềm năng to lớn của bộ não, của năng lực tư duy. Đó đã và đang là bước tiến lớn của giáo dục trong giai đoạn hiện nay.\nĐể theo kịp bước tiến đó, dù ở độ tuổi hay cương vị nào, bạn cũng cần cập nhật và bổ sung ngay cho mình những kiến thức về bộ não của con người và cách thức vận dụng trí não một cách bài bản và hiệu quả. Tối ưu hóa bộ não cũng là tối tưu hóa chất lượng công việc và chất lượng cuộc sống của mỗi người chúng ta.\nMời bạn đón đọc.",
        'regular_price' => 169000,
        'sale_price' => 135000,
        'original_price' => 135000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt '],
          ['name' => 'Số trang', 'value' => '448'],
          ['name' => 'Kích thước', 'value' => '13 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '484.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '05/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Tâm Lý Học Đám Đông',
        'code' => strtoupper(str_random(6)),
        'author' => 'Gustave Le Bon ',
        'translator' => 'Nhiều dịch giả ',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Gustave Le Bon (1841 - 1931) là nhà tâm lí học xã hội nổi tiếng người Pháp với lí thuyết về đám đông. Ông viết về nhiều lĩnh vực và có ảnh hưởng rất lớn trong xã hội Pháp đương thời.\nLe Bon tập trung nghiên cứu về tính cách và tinh thần của các dân tộc, những ưu thế và quá trình phát triển của các chủng tộc. Ông đặt lên hàng đầu khái niệm vô thức tập thể mà chính Freud đã thừa nhận vai trò của nó đối với các nghiên cứu về phân tâm học của mình. Le Bon cho rằng con người được xác định bởi những nhân tố sinh học và tâm lí học. Chủng tộc cũng núp bóng trong mỗi cá nhân cấu thành một dân tộc; nó chi phối mọi hành động, mọi ham muốn, mọi xung năng của anh ta, nó tạo nên vô thức tập thể của anh ta.\nTrong khi đó, thời đại của Le Bon đã chứng kiến bản chất di truyền của chủng tộc bị lung lay với sự lớn mạnh của đám đông và những bất ổn về chính trị, xã hội. Ông đã trải nghiệm qua Công xã Paris năm 1871 và nghiên cứu rất kỹ về cuộc Cách mạng Pháp năm 1789 và 1848. Những trải nghiệm ấy mang lại kinh nghiệm thực tiễn cho việc hình thành tư tưởng về đám đông của ông. Tư tưởng ấy được thể hiện rõ rệt nhất trong tác phẩm Tâm lí học đám đông.\nTheo Le Bon, những đám đông luôn bị vô thức tác động, họ xử sự như người nguyên thuỷ, người dã man, không có khả năng suy nghĩ, suy luận, mà chỉ cảm nhận bằng hình ảnh, bằng sự liên kết các ý tưởng; họ không kiên định, thất thường, và đi từ trạng thái nhiệt tình cuồng loạn nhất đến ngây dại ngớ ngẩn nhất.\nNgày nay, lí thuyết của Le Bon vẫn chịu một số chỉ trích. Ông được coi là người đặt nền móng cho chủ nghĩa quốc gia hiện đại. Nhưng dù thế nào đi nữa thì Le Bon cũng chỉ là “con đẻ” của thời đại ông. Nỗi lo sợ về nạn bạo lực, sự hoành hành, chứng khủng bố của những đám đông thể hiện rất rõ trong lí thuyết của ông. Ông dường như đã quá phóng đại về nguy cơ bạo lực và sự vô lí của đám đông. Tuy vậy, cuốn sách này thực sự là tác phẩm quan trọng và có ảnh hưởng lớn tới tư tưởng thời đại của Le Bon nói chung cũng như tâm lí học hiện đại nói riêng.\nTrong khi đọc cuốn sách này, xin độc giả lưu ý rằng cụm từ chủ nghĩa xã hội (socialisme) mà Le Bon nhắc đến ở đây có hàm ý là chủ nghĩa xã hội không tưởng đã tồn tại từ thế kỉ XVI đến thế kỉ XIX ở Tây Âu, chứ không đồng nghĩa với khái niệm chủ nghĩa xã hội khoa học của Marx và Engels mà Lenin đã vận dụng để xây dựng nên Liên bang Xô viết và trở thành nền tảng tư tưởng của phe xã hội chủ nghĩa được hình thành sau Chiến tranh thế giới thứ hai.\nMời bạn đón đọc.",
        'regular_price' => 123000,
        'sale_price' => 98000,
        'original_price' => 98000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '252'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '242.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '05/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Nếu... Thì?',
        'code' => strtoupper(str_random(6)),
        'author' => 'Randall Munroe',
        'translator' => 'Nguyễn Văn Trà , Nguyễn Hoài Anh',
        'publisher' => 'Nxb Lao động',
        'summary' => "Chúng ta được sinh ra với một tư duy phân biệt và bản thể bị giới hạn. Điều này là cần thiết, vì nếu không chúng ta không thể biết được đâu là mình, đâu không phải là mình, và đâu là thứ sẽ là mình. Mình là một thứ vô cùng quan trọng. Nhưng biết được rồi, thì hãy gác nó qua một bên. Gác lại luôn những điều mình vẫn tin là đúng, và thử tự hỏi xem nếu điều ngược lại xảy ra thì sao. Biết đâu điều ngược lại mới là đúng? Biết đâu đó là cách để có thể vượt qua được định kiến của bản thân. Biết đâu khi đó mình sẽ trở nên rộng mở và bao la hơn?\nHãy đặt câu hỏi. Đặt thật nhiều vào. Trả lời chúng tất nhiên là tốn công tốn sức, và rồi sẽ có lúc bạn cảm thấy hoang mang. Nhưng nhờ thế, bạn thấy yên tâm hơn với những điều hiện tại. Nhưng hay hơn cả, là đặt câu hỏi cho những điều tưởng như không bao giờ tồn tại. Biết đâu một ngày nào đó nó có thực thì sao? Mà cho dù nó không đến, thì bạn cũng đã có trong tay vô số lối đi để tiếp tục cuộc hành trình.\nMời bạn đón đọc.",
        'regular_price' => 129000,
        'sale_price' => 103000,
        'original_price' => 103000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '384'],
          ['name' => 'Kích thước', 'value' => '17 x 23 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Nhã Nam'],
          ['name' => 'Khối lượng', 'value' => '704.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '05/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Đợt Tuyệt Chủng Thứ Sáu',
        'code' => strtoupper(str_random(6)),
        'author' => 'Elizabeth Kolbert',
        'translator' => 'Trần Trọng Hải Minh',
        'publisher' => 'NXB Tri thức',
        'summary' => "Kể từ hơn nửa tỉ năm trước, năm đợt tuyệt chủng đã diễn ra, khi sự đa dạng sống trên trái đất bất ngờ thu hẹp lại. Và phải chăng chúng ta đang bước vào đợt tuyệt chủng kế tiếp - đợt tuyệt chủng thứ sáu - diễn ra trong thế Nhân sinh, một thế địa chất mà con người thống trị trên nhiều khía cạnh.\nĐể trả lời nghi vấn này, tác giả đã theo chân các nhà khoa học khảo sát sự tồn tại và xác nhận sự biến mất một số loài ở khắp các vùng trên trái đất. Từ loài ếch vàng ở Panama đến loài voi răng mấu châu Mỹ; từ lũ chim ăng-ca khờ khạo đến loài cúc đá nhỏ bé.\nBên cạnh đó, tác giả cũng đưa chúng ta đến các thử nghiệm và nghiên cứu để tìm ra nguyên nhân của đợt tuyệt chủng thứ sáu. Trong đó, nổi bật nhất chính là những hành động do con người gây ra với các hệ sinh học và địa hóa học của trái đất như: thải quá nhiều carbon dioxide, làm a-xít hóa các đại dương, chặt rừng nhiệt đới.\nCác bằng chứng cho thấy, cùng với sự xuất hiện của con người là sự biến mất của một số loài. Con người dường như đang vừa là thủ phạm vừa là nạn nhân của đợt tuyệt chủng kế tiếp này.\n'Thật là một quyển sách tuyệt vời, và nó làm sáng tỏa rằng những thay đổi lớn đột ngột có thể xảy ra; chúng không hề nằm ngoài phạm vi khả năng. Chúng từng xảy ra trước đây, và chúng có thể xảy ra lần nữa.'\n- Cựu Tổng Thống BARACK OBAMA\nMời bạn đón đọc.",
        'regular_price' => 129000,
        'sale_price' => 103000,
        'original_price' => 103000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '464'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Nhã Nam'],
          ['name' => 'Khối lượng', 'value' => '550.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '03/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Tế Bào Gốc - Khám Phá Cùng Nhà Khoa Học',
        'code' => strtoupper(str_random(6)),
        'author' => 'Paul Knoepfler',
        'translator' => 'Nhiều dịch giả',
        'publisher' => 'NXB Dân Trí',
        'summary' => "Cuốn sách giúp cho bạn đọc có một cái nhìn bao quát đối với tế bào gốc từ lịch sử phát minh, đến cấu trúc tế bào, cơ chế phân tử, đến bộ gene và di truyền ngoài bộ gene (di truyền ngoại mã).\nĐiều đặc biệt ấn tượng là tất cả những kiến thức cơ bản này được diễn giải thật dễ hiểu bằng ngôn ngữ phổ thông, chứ không hàn lâm như trong giới nghiên cứu. Để chuyển tải các khái niệm trừu tượng khó hiểu của thế giới sinh học vi mô đến với người đọc, tác giả đã sử dụng các biện pháp so sánh tương đồng rất tài tình đến nỗi những người có kiến thức trong lĩnh vực, còn thấy hết sức độc đáo thú vị.\nVí dụ: để diễn tả độ phân tán và mất kiểm soát của tế bào gốc khi được đưa vào cơ thể bệnh nhân, tác giả so sánh với hình ảnh hàng triệu con cá hồi bơi vào đại dương mênh mông. Giống như cá hồi, những tế bào gốc đi đâu về đâu trong cơ thể con người, hiện nay chúng ta chưa biết hết được. Còn tệ hơn cả cá hồi, vốn luôn “biết” đường để quay về đúng vị trí chúng đã được sinh ra để thực hiện quá trình sinh sản rồi chết đi, tế bào gốc thì không. Vì vậy, một khi chúng gây tác dụng không mong muốn, thì chúng ta “lực bất tòng tâm”. Cả hai mặt triển vọng và nguy cơ của các liệu pháp tế bào gốc đều được tác giả trình bày và phân tích với nhiều bằng chứng khoa học xác đáng.\nVới sự dẫn dắt của tác giả qua góc nhìn rất khách quan, bạn sẽ thu thập nhiều kiến thức đa chiều để tự đánh giá và định hướng cho chính mình và người thân khi muốn tìm một liệu pháp tế bào gốc khả thi nhằm cải thiện sức khỏe hay chất lượng cuộc sống. Thậm chí nếu không đủ thời gian để đi hết chiều dài cuốn sách thì bạn vẫn có thể sử dụng nó như một nguồn tư liệu để tra cứu và tìm tòi sâu hơn khi cần. Vì vậy, ngoài việc chuyển ngữ và chú giải nội dung của cuốn sách, nhóm dịch còn tạo ra một danh sách các thuật ngữ chuyên ngành Việt-Anh phổ biến, thông dụng để bạn đọc có thể tham khảo. Trong đó chúng tôi có đề xuất một vài từ tiếng Việt mới cho những thuật ngữ tiếng Anh mới hoặc vốn ít được sử dụng trong tiếng Việt. Danh sách các từ này nằm ở mục phụ lục của cuốn sách.\nMời bạn đón đọc.",
        'regular_price' => 199000,
        'sale_price' => 159000,
        'original_price' => 159000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '480'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '990.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa cứng'],
          ['name' => 'Ngày phát hành', 'value' => '04/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => '6 Phát Minh Làm Nên Thời Đại',
        'code' => strtoupper(str_random(6)),
        'author' => 'Steven Johnson ',
        'translator' => 'Nhiều dịch giả',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Steven Johnson đích thực là chuyên gia bậc thầy của lịch sử ý tưởng. Trong cuốn sách này, ông chỉ tập trung vào sáu công nghệ và khám phá các phân nhánh của chúng, cả mặt tốt lẫn không tốt. Ông đã tạo ra biểu trưng hình ảnh chim ruồi cho các loại hình phát minh mà mình quan tâm: sự đồng tiến hóa của hoa và côn trùng – kẻ không mời từ một trật tự sáng tạo khác. Cuốn sách này là tập hợp đầy đủ những “phát minh chim ruồi” hoàn toàn bất ngờ. Sáu chủ đề được đưa ra là: Thủy tinh, Làm lạnh, Âm thanh, Làm sạch, Thời gian, Ánh sáng.

        \nCó những câu chuyện nhà phát minh không nhận ra phạm vi thực sự khám phá của mình, như Édouard-Léon Scott de Martinville, người vào năm 1850 đã phát minh ra máy ký âm nhưng không có thiết bị phát lại. Ông tin rằng, ngày nào đó chúng ta sẽ giải mật chúng như cách đọc nốt nhạc. Máy quét sóng siêu âm được phát triển dựa trên thiết bị tìm kiếm tàu đắm Titanic. Nhiều năm sau, công nghệ lại kết hợp với chính sách một con của Trung Quốc để tạo thành sự mất cân bằng giới tính khốc liệt trong xã hội trọng nam. Các chủ đề và hướng tiếp cận của Johnson được lựa chọn đều gây sự khâm phục đáng kinh ngạc. Một trong số đó là chuyện vào thập niên 1850, 1860, cả thành phố Chicago được nâng lên bằng kích vít để đặt hệ thống ống cống ngầm.
        
        \nPhương pháp mạnh bạo này vô cùng cần thiết vì Chicago rất phẳng; không có độ dốc tự nhiên để thoát nước và thành phố, trung tâm buôn bán thịt náo nhiệt miền trung tây, điều táo bạo cần thiết để giải vây thành phố khỏi rác thải độc hại. Chicago một lần nữa lại xuất hiện ở chương “Làm lạnh”: đó là đường ô tô ray cho xe đông lạnh chờ thịt từ đồng bằng đi khắp nước Mỹ. Johnson nhấn mạnh rằng nhiều phát minh không phải là kết quả của “phút Eureka” mà là sự chín muồi của một tiến trình dài bao gồm một mạng lưới các nhà phát minh và doanh nghiệp. Ông đã cố xoay xở và cuối cùng đã tìm ra cách định nghĩa khoảnh khắc này. Dữ liệu số được truyền dẫn lần đầu tiên năm 1943 qua một đường dây mật SIGSALYY được Alan Turing và Phòng thí nghiệm Bell phát triển: Turing là một nhà sáng chế thiên tài.
        
        \nĐây là một cuốn sách ngắn, khá dễ đọc, thú vị và đầy thách thức với những điều kỳ diệu mỗi ngày quanh ta.
        
        \nMời bạn đón đọc.",
        'regular_price' => 165000,
        'sale_price' => 132000,
        'original_price' => 132000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '300'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '550.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '04/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Thiên Nga Đen',
        'code' => strtoupper(str_random(6)),
        'author' => 'Nassim Nicholas Taleb',
        'translator' => 'Cam Thảo, Hoàng Trung',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Trước khi khám phá ra thiên nga đen tồn tại trên đời (ở Úc), người ta vẫn tin rằng tất cả chim thiên nga trên đời đều có màu trắng. Phát hiện bất ngờ này đã thay đổi toàn bộ thế giới quan của nhân loại (về thiên nga).\nChúng ta không biết rất nhiều thứ nhưng lại hành động như thể mình có khả năng dự đoán được mọi điều. Và trong cuốn sách này, tác giả Nassim Nicholas Taleb đã đi sâu vào khai thác những sai lầm của tư tưởng cố hữu ấy. Theo ông, “thiên nga đen” là một biến cố tưởng chừng như không thể xảy ra với ba đặc điểm chính: không thể dự đoán, có tác động nặng nề và sau khi nó xảy ra, người ta lại dựng lên một lời giải thích để khiến nó trở nên ít ngẫu nhiên hơn, dễ dự đoán hơn so với bản chất thật của nó. Thành công đáng kinh ngạc của Facebook có thể được coi là một “thiên nga đen”, việc nước Anh rời khỏi Liên minh châu Âu cũng là một “thiên nga đen”. Thiên nga đen luôn ẩn hiện trong mọi mặt của cuộc sống với những tác động khó lường, theo cả hướng tiêu cực và tích cực.\nTinh tế, táo bạo nhưng không kém phần thú vị, Thiên Nga Đen chắc chắn là cuốn sách không thể bỏ qua cho những ai đam mê hiểu biết. Và cuốn sách này, bản thân nó cũng chính là một thiên nga đen…\nMời bạn đón đọc.",
        'regular_price' => 269000,
        'sale_price' => 215000,
        'original_price' => 215000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '476'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '726.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '03/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Phương Pháp Đọc Sách Hiệu Quả',
        'code' => strtoupper(str_random(6)),
        'author' => 'Charles Van Doren, Mortimer J.Adler',
        'translator' => 'Hải Nhi',
        'publisher' => 'Nxb Lao động - Xã hội',
        'summary' => "Đọc sách như một nghệ thuật, ngay từ lần xuất bản đầu tiên năm 1940, đã được đánh giá là cuốn sách hướng dẫn đọc hiểu lý thú và hiệu quả nhất dành cho độc giả phổ thông. Cuốn sách đã nhanh chóng trở thành một tác phẩm kinh điển về cách đọc sách thông minh.\nĐọc sách như một nghệ thuật giúp bạn khám phá và lĩnh hội các cấp độ đọc khác nhau, từ đọc sơ cấp, đọc lướt có hệ thống đến đọc kiểm soát và đọc siêu tốc. Bạn có thể áp dụng các cấp độ này cho việc phân loại, chụp X-quang hay phê bình sách, tùy theo nhu cầu và mục đích của mình. Nhờ các kỹ năng đọc được hệ thống ở đây, bạn sẽ biết cách tiếp cận và nắm bắt tất cả các loại văn bản, dù đó là sách thực hành, khoa học, toán học, triết học, lịch sử hay các tác phẩm văn học.\nĐọc sách như một nghệ thuật, hơn hết, thúc đẩy ta trở thành độc giả say mê. Cuốn sách là người bạn đường không thể thiếu của mỗi người trên hành trình đối thoại để học hỏi, khám phá, tu thân và trưởng thành, như Decartes đã nói: 'Đọc sách là được trò chuyện với những người thành đạt nhất của các thế kỷ đã qua'.\nMời bạn đón đọc.",
        'regular_price' => 139000,
        'sale_price' => 111000,
        'original_price' => 111000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '360'],
          ['name' => 'Kích thước', 'value' => '13 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '396.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '12/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Khởi Đầu Những Phát Minh Lỗi Lạc Của Nhân Loại',
        'code' => strtoupper(str_random(6)),
        'author' => 'Kevin Ashton',
        'translator' => 'Trần Trọng Hải Minh',
        'publisher' => 'Nxb Lao động',
        'summary' => "“Sáng tạo là Bản năng của con người.”\nKevin Ashton, chuyên gia công nghệ tiên phong là người đã trải qua đủ mọi thử thách trong việc sáng tạo điều gì đó mới mẻ. Trong quyển sách này, ông sẽ dẫn chúng ta qua những tạo vật vĩ đại nhất và hé lộ một sự thật bất ngờ về người đã tạo ra chúng – từ một phòng thí nghiệm nơi khám phá ra bí mật của DNA, cho đến một tiệm xe đạp nơi anh em nhà Wright quyết định tạo ra máy bay.\nÔng cũng dẫn chứng nhiều ví dụ ấn tượng từ những cá nhân lỗi lạc, nhưng thất bại vô số nhưng cần thiết để tạo nên bước đột phá. Qua các ví dụ từ Mozart đến Apple, đây là cuốn sách phải đọc đối với những nhà chế tạo và phát minh, những người mong muốn đem lại những điều mới mẻ hơn, tốt đẹp hơn cho nhân loại.\nMời bạn đón đọc.",
        'regular_price' => 188000,
        'sale_price' => 150000,
        'original_price' => 150000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '576'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Zenbook'],
          ['name' => 'Khối lượng', 'value' => '550.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '03/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Tại Sao Người Do Thái Xuất Sắc?',
        'code' => strtoupper(str_random(6)),
        'author' => 'Yūrō Teshima',
        'translator' => 'Lê Tiến Thành',
        'publisher' => 'NXB Hồng Đức',
        'summary' => 'Nhắc đến người Do Thái, người ta sẽ nghi ngay đến nhân vật gã con buôn Shylock chuyên cho vay nặng lãi trong vở kịch "Người lái buôn thành Venice" của W. Shakespeare, nghĩ đến chúa Jesus của Kitô giáo, đến các nhà khoa học lừng danh Albert Einstein, Sigmund Freud..., đồng thời, người ta cũng liên tưởng đến sự giàu có, sự khôn ngoan, giữ gìn truyền thống, tinh thần đoàn kết của người Do Thái...

        "Tại sao người Do Thái xuất sắc?" là tác phẩm nghiên cứu nhiều năm của học giả Nhật bản Yūrō Teshima về lịch sử dân tộc Do Thái, về cách mà người Do Thái sinh tồn cùng nhiều phương diện trong đời sống của họ, về lối sống và lối nghĩ của người Do Thái trong các lĩnh vực kinh tế, giáo dục, xã hội, luân lý, lịch sử và tôn giáo...
        
        Mời bạn đón đọc.
        ',
        'regular_price' => 88000,
        'sale_price' => 88000,
        'original_price' => 88000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '240'],
          ['name' => 'Kích thước', 'value' => '13.5 x 21 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Văn Lang'],
          ['name' => 'Khối lượng', 'value' => '308.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '12/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Tư Duy Đúng Cách - Tư Duy Khách Quan',
        'code' => strtoupper(str_random(6)),
        'author' => 'Charles Phillips',
        'translator' => 'Anh Chiến',
        'publisher' => 'Nxb Trẻ',
        'summary' => 'Tư duy đúng cách là bộ sách kiến thức bách khoa được trình bày theo bố cục chặt chẽ, gồm những câu đố khơi gợi trí thông minh kèm theo từng lời gợi ý hữu dụng, với ba mức độ từ dễ đến khó. Qua đó, người đọc sẽ vô cùng ngạc nhiên khi thấy khả năng suy luận thực tiễn, cũng như óc phán đoán, sáng tạo của mình đã cải thiện đáng kể. Đồng thời nhận ra không khó để có được những tư duy khoa học sáng suốt nếu biết cách rèn luyện trí não đúng phương pháp. Bộ tám cuốn gồm:

        Tư duy khách quan là một trong những tựa sách thuộc bộ sách Tư duy đúng cách thông qua các câu đố thông minh và thử thách sáng tạo, sách gợi mở cho người đọc phương pháp suy nghĩ đúng đắn, vượt qua những hạn chế ràng buộc để có cái nhìn khách quan khi phải đối diện với tình huống lựa chọn thực tế. Nhờ vậy, độc giả sẽ không còn phải thấy băn khoăn khi đưa ra quyết định nên làm theo cách của mình hay phải nghe theo lời người khác.  
        
        Mời bạn đón đọc.',
        'regular_price' => 35000,
        'sale_price' => 21000,
        'original_price' => 21000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '100'],
          ['name' => 'Kích thước', 'value' => '13 x 19 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'NXB Trẻ'],
          ['name' => 'Khối lượng', 'value' => '110.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '28/07/2015'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Lược Sử Vạn Vật',
        'code' => strtoupper(str_random(6)),
        'author' => 'Bill Bryson',
        'translator' => 'Khương Duy, Hán Ngọc',
        'publisher' => 'Nxb Khoa học xã hội',
        'summary' => 'Lược sử vạn vật là cuốn sách phổ biến khoa học trình bày một cách ngắn gọn lịch sử nghiên cứu khoa học tự nhiên, những thành tựu khoa học trong các lĩnh vực khoa học tự nhiên chính: vật lý, hóa học, sinh học, địa chất, thiên văn… với nhiều tên tuổi, giai thoại và sự thật.

        Với cuốn sách này, người đọc sẽ biết được những giới hạn trong tri thức của con người về vũ trụ và cả về chính trái đất. Đây là cuốn sách khoa học phổ thông bán chạy nhất nước Anh năm 2005 với hơn 300.000 bản in. Nhà phê bình người Anh, Craig Brown thậm chí đã nhận xét rằng tác phẩm này xứng đáng bán được 500.000.000.000 cuốn (theo cách nói của chính Bryson, “bằng với số proton có trong một dấu chấm câu”).
        
        William McGuire “Bill” Bryson, tác giả cuốn sách Lược sử vạn vật – A Short History of Nearly Everything sinh năm 1951, là tác giả nổi tiếng hàng đầu trong thể loại non-fiction ở Bắc Mỹ, với vô số người hâm mộ trên khắp thế giới.
        
        Mời bạn đón đọc.',
        'regular_price' => 219000,
        'sale_price' => 175000,
        'original_price' => 175000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '724'],
          ['name' => 'Kích thước', 'value' => '13 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '814.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '12/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Khám Phá Thế Giới - Vương Quốc Của Những Con Số',
        'code' => strtoupper(str_random(6)),
        'author' => 'Denis Guedj',
        'translator' => 'Hà Dương Tường',
        'publisher' => 'NXB Kim Đồng',
        'summary' => 'Ngày nay, ý tưởng về số hiển nhiên là kết quả của một quá trình hoạt động trừu tượng của tư duy. Theo dòng lịch sử, để hình dung những số tự nhiên, con người đã sáng tạo ra một tập hợp những biểu tượng số – “các chữ số” – và những thiết bị ít nhiều hữu hiệu để biểu đạt chúng, – các bảng tính, bàn tính gảy, hay các nút dây của người Inca. Vào thế kỉ V, thiên tài toán học của người Ấn Độ đã đề ra cách viết “dùng vị trí” các con số, chỉ sử dụng 10 con số trong đó có số không (0, 1, 2, 3, 4, 5, 6, 7, 8, 9), có thể biểu đạt tất cả các con số. Cách viết số kì diệu này xoá bỏ khoảng cách giữa chữ số và tính toán.

        Phương Tây, sau nhiều thế kỉ ngập ngừng, đã chấp nhận cách viết này của người Ấn Độ, được những nhà toán học Arập phổ biến. Nghề in mới hình thành thời đó đã góp phần áp đặt và truyền bá việc sử dụng những con số “Ấn Độ – Arập”. Số tương đối, số hữu tỉ, số thực, số ảo, số phức, thậm chí cả số siêu việt và siêu thực: vương quốc các con số mở rộng lãnh địa của mình theo sự gia tăng của nhu cầu tính toán và tiến bộ của lí thuyết. Denis Guedj mời gọi chúng ta cùng khám phá sự phát sinh phi thường của một trong những sáng tạo đẹp nhất của loài người: NHỮNG CON SỐ.
        
        Mời bạn đón đọc.',
        'regular_price' => 80000,
        'sale_price' => 80000,
        'original_price' => 80000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt '],
          ['name' => 'Số trang', 'value' => '176'],
          ['name' => 'Kích thước', 'value' => '14.5 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'NXB Kim Đồng'],
          ['name' => 'Khối lượng', 'value' => '308.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '12/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Xây Dựng Xã Hội Học Tập',
        'code' => strtoupper(str_random(6)),
        'author' => 'Bruce C. Greenwald, Joseph E. Stiglitz',
        'translator' => 'Nhiều dịch giả',
        'publisher' => 'NXB Chính Trị Quốc Gia',
        'summary' => 'Từ khi được xuất bản, cuốn sách Xây dựng xã hội học tập: Cách tiếp cận mới cho tăng trưởng, phát triển và tiến bộ xã hội đã trở thành một tài liệu hữu ích cho độc giả - những người luôn dành sự ủng hộ đối với những chính sách thúc đẩy sự tiến bộ về khoa học và công nghệ của chính phủ. Cuốn sách là một tác phẩm đầy thuyết phục cho thấy mức sống của chúng ta được cải thiện đáng kể như thế nào là kết quả của việc học cách để học tập, và đưa ra những lý giải làm thế nào mà các quốc gia phát triển và các quốc gia đang phát triển đều có thể xây dựng được một nền kinh tế học tập kiểu mới.

        Với lối viết gần gũi, dễ hiểu, cuốn sách Xây dựng xã hội học tập: Cách tiếp cận mới cho tăng trưởng, phát triển và tiến bộ xã hội (Ấn bản dành cho độc giả) đã truyền tải được thông điệp chính cũng như những phương hướng về mặt chính sách.
        
        Cuốn sách làm sáng tỏ quan điểm cho rằng xây dựng một xã hội học tập đòi hỏi chính phủ phải ban hành được những chính sách có chất lượng trên các lĩnh vực thương mại, công nghiệp, sở hữu trí tuệ và các lĩnh vực quan trọng khác. Luận điểm chính của cuốn sách - rằng mọi chính sách đều ảnh hưởng tới học tập - có ý nghĩa quan trọng đối với những chính phủ còn chưa quan tâm đến những cách thức đổi mới mà họ có thể vận dụng để thúc đẩy nền kinh tế của đất nước tiến lên phía trước.
        
        Mời bạn đón đọc.
        ',
        'regular_price' => 212000,
        'sale_price' => 170000,
        'original_price' => 170000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '556'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '858.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '11/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Bài Học Phần Lan 2.0',
        'code' => strtoupper(str_random(6)),
        'author' => 'Pasi Sahlberg',
        'translator' => 'Đặng Việt Vinh',
        'publisher' => 'Nxb Thế giới',
        'summary' => 'Làm thế nào để từ một đất nước bị tàn phá nặng nề trong Thế chiến hai, cơ sở vật chất lạc hậu, nền chính trị biến động với cuộc đấu của các Đảng phái… Phần Lan vươn mình trở thành đất nước có nền giáo dục số 1 hành tinh?

        "Bài học Phần Lan 2.0" là bản cập nhật có chỉnh sửa của "Bài học Phần Lan" – tác phẩm của nhà sư phạm Phần Lan Pasi Sahlberg.
        
        Sách là câu chuyện về quá trình xây dựng nền sư phạm Phần Lan trong 4 thập kỷ qua. Tác giả nhấn mạnh vào các giải pháp mang tính cách mạng của Phần Lan, khác biệt của chúng với nước Mỹ và các quốc gia khác trên thế giới. 
        
        Phần Lan chứng tỏ rằng chính sách lấy giáo viên là trung tâm, chuyên nghiệp hóa đội ngũ giáo viên, xây dựng niềm tin giữa nhà trường và xã hội, đầu tư vì nền giáo dục công bằng thay vì thành tích, đã cực kì thành công, biến Phần Lan thành hình mẫu giáo dục của mọi quốc gia trên thế giới.
        
        "Bài học Phần Lan 2.0" sẽ là cuốn sách gối đầu giường của mọi nhà sư phạm và phụ huynh Việt Nam. Các ý tưởng trong sách gần như tưởng phản hoàn toàn với tình trạng chạy theo thành tích, cải cách liên miên nhưng bế tắc, gây sức ép học hành lên con cái, của nhà trường và phụ huynh nước ta.
        
        Mời bạn đón đọc.',
        'regular_price' => 169000,
        'sale_price' => 135000,
        'original_price' => 135000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '432'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '506.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '12/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'An Toàn Khi Online',
        'code' => strtoupper(str_random(6)),
        'author' => 'Louie Stowell',
        'translator' => 'Nguyễn Minh',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Tuần này bạn đã check in ở bao nhiêu quán? Đã selfie bao nhiêu lần? Lần cuối bạn vào WC mà không mang theo smartphone là từ bao giờ? Nếu bạn thấy cả nguồn sống bỗng chốc thu bé lại vừa bằng một màn hình thì bạn không cô đơn đâu. Internet đã chạm đến mọi ngóc ngách trong cuộc sống của chúng ta. Thế giới đó thật kỳ diệu với nguồn tri thức bất tận, và muôn màu vẻ cuộc sống đang hiện lên từng giây từng phút. Nhưng còn những mặt trái của nó, những những mê cung tăm tối đầy cạm bẫy với đủ loại quái thú, nào spammer, nào troll, hay cả những kẻ ấu dâm đáng sợ?

        Làm thế nào để có thể lên mạng thoải mái, thỏa sức “quẩy” với Internet mà không bị “sấp mặt luôn” với những nguy cơ đầy rẫy trên các mạng xã hội và trạng mạng? Cuốn sách bạn đang cầm trên tay sẽ cung cấp cho bạn tất cả những đấu pháp và mưu mẹo cần thiết để hòa nhập vào thế giới ảo một cách an toàn và tích cực nhất.
        
        Mời bạn đón đọc.",
        'regular_price' => 49000,
        'sale_price' => 39000,
        'original_price' => 39000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '144'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Nhã Nam'],
          ['name' => 'Khối lượng', 'value' => '176.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '01/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Ngủ Ơi Là Ngủ - 5 Tiếng Là Đủ',
        'code' => strtoupper(str_random(6)),
        'author' => 'Satoshi Tsubota',
        'translator' => 'Hương Linh',
        'publisher' => 'Nxb Công Thương',
        'summary' => 'Bạn đang trải qua quãng thời gian lãng phí  ở “trên giường”, mỗi ngày 20 phút.

        Gửi tới bạn – người đang vướng phải những phiền muộn sau:
        
        - Ngủ bao lâu cũng không hết cảm giác mệt mỏi
        
        - Luôn thức dậy buổi sáng trong trạng thái uể oải
        
        - Dễ bị tỉnh giấc, trằn trọc cho tới nửa đêm
        
        - Không đủ thời gian dành cho giấc ngủ
        
        - Trải qua mỗi ngày với quỹ thời gian eo hẹp
        
        Và bạn cũng nhận ra điều đó, bạn cũng biết những người thành công đều ngủ ít hơn bình thương nhưng năng suất công việc của họ vẫn luôn hiệu quả. Bạn cũng cố gắng rèn luyện bản thân minh nhưng có thể vì 2 lý do dưới đây sẽ làm bạn bỏ cuộc: 
        
        - Không thể thức dậy sớm, dù cố gắng đến mấy cũng không duy trì được
        
        - Buồn ngủ trong suốt cả một ngày nếu như dậy sớm. 
        
        Mức độ tốt và xấu của giấc ngủ không thể chỉ đo bằng “thời gian”. Giấc ngủ sẽ được quyết định bởi phép nhân: “Thời gian” x “Chất lượng”.
        
        Nếu có thể lĩnh hội “Phương pháp ngủ ngon trong 5 tiếng” được giới thiệu trong cuốn sách này, cho dù thời gian dành cho giấc ngủ của bạn có ngắn đi chăng nữa, cũng sẽ không có chuyện bạn phải trải qua một buổi sáng khổ sở, không tỉnh táo, mệt mỏi vẫn còn chưa biến mất, và làm việc kém hiệu quả do cả ngày trong trạng thái buồn ngủ. 
        
        “Phương pháp ngủ ngon trong 5 tiếng” của cuốn sách này truyền đạt tới bạn đọc kỹ thuật sở hữu tính hợp lý cả về y học lẫn sinh lý học để trở thành “người ngủ ngắn”.
        
        Phương pháp ngủ ngon trong 5 tiếng tức là, cho dù bạn chỉ ngủ trong một thời gian ngắn thôi, cả não bộ và cơ thể vẫn có cảm giác tràn đầy sinh khí, đôi mắt và tinh thần hoàn toàn trong trạng thái tỉnh táo. Nhờ đó, mọi hoạt động trong ngày đều đạt hiệu quả cao nhất. Xin được giới thiệu bí quyết giúp bạn có một giấc ngủ sâu và ngắn, nâng cao tối đa “chất lượng” giấc ngủ.
        
        Bên cạnh đó, kỹ thuật “Thức dậy lúc 5 giờ sáng” mà tác giả sẽ đề cập tới chính là phương pháp cải thiện giấc ngủ vô cùng hiệu quả dành cho những người thường ngủ khoảng 7 tiếng một ngày, giúp họ rút ngắn thời gian ngủ theo kiến thức y học đúng đắn và khoa học.
        
        “Phương pháp ngủ ngon trong 5 tiếng” được tạo thành từ các bước sau đây: 
        
        Bước 1 – Nâng cao hiệu quả giấc ngủ bằng 9 kỹ thuật “Ngủ ngay lập tức – Dậy ngay lập tức” 
        Bước 2 – Nâng cao “chất lượng” giấc ngủ, phục hồi triệt để não bộ và cơ thể 
        Bước 3 – Áp dụng năm phương pháp “ngủ tạm thời” để tỉnh táo suốt cả ngày. 
        Bước 4 – Tạo thói quen “Thức dậy lúc 5 giờ sáng” trong vòng hai tháng 
        Tuy nhiên, không phải chỉ đơn giản cắt giảm thời gian ngủ là được. Điều quan trọng là, cho dù chỉ ngủ ngắn, cơ thể vẫn khỏe mạnh, không những thế còn ngập tràn năng lượng để tập trung vào những việc khác. Mục đích của cuốn sách này chính là như vậy. Chỉ cần áp dụng triệt để những điều được ghi trong cuốn sách này, bạn hoàn toàn có thể trở thành người ngủ ngắn.
        
        Mời bạn đón đọc.',
        'regular_price' => 69000,
        'sale_price' => 55000,
        'original_price' => 55000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '236'],
          ['name' => 'Kích thước', 'value' => '13 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Thái Hà'],
          ['name' => 'Khối lượng', 'value' => '264.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '26/01/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Tâm Lý Học & Đời Sống',
        'code' => strtoupper(str_random(6)),
        'author' => 'Richard J. Gerrig, Philip G. Zimbardo',
        'translator' => 'Kim Dân',
        'publisher' => 'NXB Hồng Đức',
        'summary' => "Hiểu biết tâm lý con người là một lợi thế trong các hoạt động tương tác xã hội. Nghiên cứu và ứng dụng thành tựu của môn khoa học này cũng góp phần quan trọng vào việc nâng cao chất lượng sống về mặt tinh thần, làm tăng tiến sự giao lưu giữa các cộng đồng văn hóa và phát triển xã hội loài người.\nTâm lý học và đời sống là cuốn sách đồ sộ, đề cập và đi sâu khai thác rất nhiều chủ đề về tâm lý con người dựa trên kết quả của hàng trăm công trình thực nghiệm do các nhà nghiên cứu tâm lý thực hiện. Đó là những nghiên cứu đáng tin cậy được tập hợp từ nhiều nơi trên khắp thế giới, ở nhiều thời điểm lịch sử cho đến thế kỷ 21, trên nhiều quy mô khác nhau. Các chủ đề tâm lý con người, từ nhận thức đến hành vi chủ quan cũng như tác động của hoàn cảnh, đều được phân tích đầy đủ trong cuốn sách này. Đây sẽ là một tài liệu tổng quát và chuyên sâu giúp bạn nghiên cứu các vấn đề tâm lý học trong đời sống hàng ngày một cách có hệ thống và dễ tiếp thu nhất.\nMời bạn đón đọc.",
        'regular_price' => 370000,
        'sale_price' => 370000,
        'original_price' => 370000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '664'],
          ['name' => 'Kích thước', 'value' => '19 x 27 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Văn Lang'],
          ['name' => 'Khối lượng', 'value' => '1716.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa cứng'],
          ['name' => 'Ngày phát hành', 'value' => '2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Phát Minh Cuối Cùng',
        'code' => strtoupper(str_random(6)),
        'author' => 'James Barrat',
        'translator' => 'Chu Kiên',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Trí tuệ nhân tạo giúp bạn chọn những cuốn sách bạn mua, những bộ phim bạn xem, và thậm chí những người bạn hẹn hò. Nó có trong điện thoại thông minh của bạn và tới đây sẽ lái chiếc xe của bạn. Nó thực hiện hầu hết các giao dịch trên Wall Street, và kiểm soát cơ sở hạ tầng điện, nước và giao thông. Nhưng trí tuệ nhân tạo cũng có thể đe dọa sự tồn tại của con người.

        Chỉ trong một thập kỷ, AI có thể đạt ngang ngửa và sau đó vượt qua trí thông minh của con người. Các công ty và cơ quan chính phủ đang rót hàng tỷ đô-la để thu được một AI với trí thông minh ở cấp độ con người. Một khi AI đã phát triển đến mức này, các nhà khoa học lập luận rằng, nó sẽ có những động lực sống giống như con người. Chúng ta có thể sẽ buộc phải cạnh tranh với một kẻ thù ngoan cường hơn, mạnh mẽ hơn và khác biệt hơn chúng ta tưởng tượng.
        
        Thông qua việc phỏng vấn với những người có tầm nhìn xa về công nghệ, các cơ quan giám sát công nghiệp, và những hệ thống AI, cuốn sách Phát minh cuối cùng khám phá những nguy cơ của việc theo đuổi AI cao cấp. Cho đến nay, trí thông minh của con người không có đối thủ. Liệu chúng ta có thể cùng tồn tại với những thứ mà trí tuệ của chúng ta trở nên nhỏ bé hơn hẳn? Và liệu chúng sẽ cho phép chúng ta cùng tồn tại?
        
        “Cuốn sách trần trụi về chủ đề quan trọng nhất của thế kỷ này và có thể còn hơn thế - sự tồn vong của nhân loại. Ước gì nó là khoa học viễn tưởng nhưng tôi biết rằng không phải vậy”. 
        
        - Jaan Tallinn, đồng sáng lập Skype
        
        “Câu chuyện hấp dẫn về thách thức quan trọng nhất của con người. Một Mùa xuân im lặng của thế kỷ 21”. 
        
        - Michael Vassar, cựu Chủ tịch, Viện nghiên cứu điểm kỳ dị
        
        Mời bạn đón đọc.",
        'regular_price' => 185000,
        'sale_price' => 148000,
        'original_price' => 148000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '436'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '660.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa cứng'],
          ['name' => 'Ngày phát hành', 'value' => '02/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);

      // Product::create([
      //   'name' => '',
      //   'code' => strtoupper(str_random(6)),
      //   'author' => '',
      //   'translator' => '',
      //   'publisher' => '',
      //   'summary' => '',
      //   'regular_price' => ,
      //   'sale_price' => ,
      //   'original_price' => * 0.5,
      //   'quantity' => rand(1,50),
      //   'attributes' => json_encode([ 
      //     ['name' => 'Ngôn ngữ', 'value' => ''],
      //     ['name' => 'Số trang', 'value' => ''],
      //     ['name' => 'Kích thước', 'value' => ''],
      //     ['name' => 'Nhà phát hành', 'value' => ''],
      //     ['name' => 'Khối lượng', 'value' => ''],
      //     ['name' => 'Định dạng', 'value' => ''],
      //     ['name' => 'Ngày phát hành', 'value' => ''],
      //   ]),
      //   'image' =>'',
      //   'user_id' => 1,
      //   'category_id' => 17
      // ]);

    }
    public function saveImage($image)
    {
      if (!empty($image) && file_exists(public_path('uploads'))) {
        $folderName = date('Y-m');
        $fileNameWithTimestamp = md5($image->getClientOriginalName() . time());
        $fileName = $fileNameWithTimestamp . '.' . $image->getClientOriginalExtension();
        if (!file_exists(public_path('uploads/' . $folderName))) {
          mkdir(public_path('uploads/' . $folderName), 0755);
        }
        $image->move(public_path('uploads/' . $folderName), $fileName);
        $imageName = "$folderName/$fileName";
        $createImage = function ($suffix = '_thumb', $width = 250, $height = 170) use ($fileNameWithTimestamp, $image, $folderName, $fileName) {
          $thumbnailFileName = $fileNameWithTimestamp . $suffix . '.' . $image->getClientOriginalExtension();
          Image::make(public_path("uploads/$folderName/$fileName"))
            ->resize($width, $height)
            ->save(public_path("uploads/$folderName/$thumbnailFileName"));
        };
        $createImage();
        $createImage('_450x337',450,337);
        $createImage('_80x80',80,80);
      }
      return $imageName;
    }
    
}
