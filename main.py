from telegram import Update
from telegram.ext import ApplicationBuilder, CommandHandler, ContextTypes


async def hello(update: Update, context: ContextTypes.DEFAULT_TYPE) -> None:
    print(update.effective_user.id)
    if update.effective_user.id==581589257:
        await update.message.reply_text(f'Hello {update.effective_user.first_name}. this is your res link [stats](http://2958566.letmesty.web.hosting-test.net/index.php?username=helvetian)')
    else:
        await update.message.reply_text('sorry, we have no results for you')



app = ApplicationBuilder().token("7347946916:AAFbRvc-PEXh1ZVMPnaITpCohK-j4UhJGmA").build()

app.add_handler(CommandHandler("start", hello))
app.add_handler(CommandHandler("hello", hello))
app.add_handler(CommandHandler("stats", hello))

app.run_polling()